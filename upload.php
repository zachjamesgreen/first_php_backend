<?php
require_once 'vendor/autoload.php';
use \GetId3\GetId3Core as GetId3;
include "bootstrap.php";
include "src/Artist.php";
include "src/Album.php";
include "src/Song.php";
include "php/class.id3.php";
include "php/class.UploadFile.php";
$allowedTypes = ['audio/mpeg3', 'audio/x-mpeg-3', 'audio/mp3'];

if($_SERVER['HTTP_ORIGIN'] == "http://zachgreen.codes"){
    $file = diverse_array($_FILES['file']);

    foreach ($file as $key) {
        $tmp = $key['tmp_name'];
        $type = $key['type'];

        $tags = new GetTags($tmp);
        print_r($tags->getAnalyze());
        exit;

        $format = $tags->getFormat();
        if($format == 'mp3' || in_array($type, $allowedTypes)){


            $songTitle = $tags->getSongTitle();
            $artist = $tags->getArtist();
            $albumTitle = $tags->getAlbumTitle();
            $trackNumber = $tags->getTrackNumber();
            $year = $tags->getYear();
            $bpm = $tags-> getBpm();
            if (!is_numeric($year)){
                $year = null;
            }
            if (!is_numeric($bpm)){
                $bpm = null;
            }
            $upload = new UploadFile();
            $upload->setPost(new CURLFile($tmp, $type, $songTitle));
            $upload->setOpt();

            $filename = $upload->send();

            if($filename === 0){
                $a = $entityManager->getRepository('Artist')
                ->findOneBy(array('artist'=>$artist));
                if($a){
                }else{
                    $a = new Artist();
                    $a->setArtist($artist);
                    $entityManager->persist($a);
                    $entityManager->flush();
                }
                $al = $entityManager->getRepository('Album')
                ->findOneBy(array('albumTitle'=>$albumTitle));
                if($al){
                }else{
                    $al = new Album();
                    $al->setArtistId($a);
                    $al->setAlbumTitle($albumTitle);
                    $al->setYear($year);
                    $entityManager->persist($al);
                    $entityManager->flush();
                }
                $s = new Song();
                $s->setAlbumId($al);
                $s->setSongTitle($songTitle);
                $s->setFormat($format);
                $s->setTrackNumber($trackNumber);
                $s->setBpm($bpm);
                $s->setFilename($filename);
                $entityManager->persist($s);
                $entityManager->flush();

                echo "$songTitle uploaded successfully";
            }else{
                echo "Did not upload ". $songTitle . " successfully<br />";
            }// end move if

        }else{
            $text = "Sorry ";
            $text += $tags->getSongTitle();
            $text += " was not a mp3 file!";
            echo $text;
            exit;
        }// end if mp3
    }// end foreach
}// end if ORGIN test
function diverse_array($vector) {
    $result = array();
    foreach($vector as $key1 => $value1)
        foreach($value1 as $key2 => $value2)
            $result[$key2][$key1] = $value2;
    return $result;
}
// TODO find some way to use this
function r($string){
    return  preg_replace("/([^A-Za-z0-9_\(\)\-\.\+\&\: ]|[\.]{2})/","",$string);
}
