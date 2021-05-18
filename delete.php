<?php
include "bootstrap.php";
include "src/Artist.php";
include "src/Album.php";
include "src/Song.php";

// header('Access-Control-Allow-Origin: http://localhost');

if($_POST){
    
    $id = $_POST['id'];

    $a = $entityManager->getRepository('Song')->find($id);
    $entityManager->remove($a);
    if($entityManager->flush()){
        echo "Deleted";
    }else{
        echo "Not Deleted";
    }
}
