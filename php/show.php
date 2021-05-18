<?php
include "../bootstrap.php";
include "../src/Artist.php";
include "../src/Album.php";
include "../src/Song.php";
// have something here
// but for now get all
// if($_GET()){
//
// }


$query = $entityManager->createQuery("SELECT s.id, s.songTitle, s.trackNumber, s.filename, al.albumTitle, a.artist FROM Song s JOIN Album al WHERE s.albumId = al.id JOIN Artist a WHERE al.artistId = a.id");
$songs = $query->getResult();

header("Content-Type: application/json");
echo json_encode($songs, JSON_HEX_AMP);
