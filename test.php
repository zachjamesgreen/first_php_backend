<?php
require_once 'vendor/autoload.php';
use \GetId3\GetId3Core as GetId3;

$i = new GetId3();
$tags = $i->analyze('01. A LIGHT THAT NEVER COMES (Linkin Park x Steve Aoki).mp3');
echo '<pre>';
print_r($tags['tags']['id3v2']);
