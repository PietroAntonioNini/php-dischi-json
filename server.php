<?php

$json = file_get_contents('./list-album.json');
$albums = json_decode($json, true);

header("Content-Type: application/json");

echo json_encode($albums);