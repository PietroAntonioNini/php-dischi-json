<?php

//se viene specificato un indice, restituisce le info di quell'album
if(isset($_GET['discIndex'])) {

    $index = $_GET['discIndex'];
    $json = file_get_contents('./list-album.json');
    $albums = json_decode($json, true);

    $selectedAlbum = $albums[$index];

    header("Content-Type: application/json");

    echo json_encode($selectedAlbum);

} else {

    //se non viene specificato un indice, restituisce tutti gli album
    $json = file_get_contents('./list-album.json');
    $albums = json_decode($json, true);

    header("Content-Type: application/json");
    
    echo json_encode($albums);
}