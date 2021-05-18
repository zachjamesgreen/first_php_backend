<?php
echo '<h1>Test</h1>';
include "class.id3.php";

$tags = new GetTags($_FILES['file']['tmp_name']);
echo $tags->getSongTitle();

// print_r($_FILES);
// echo move_uploaded_file($_FILES['file']['tmp_name'], "../music/".$_FILES['file']['name']);
