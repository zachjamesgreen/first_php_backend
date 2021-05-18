<?php
include 'class.ProcessFile.php';
echo '<h1>Insert</h1>';
if(isset($_FILES['file'])){
    $file = $_FILES['file'];
    $p = new ProcessFile($file['tmp_name']);
    if($p->getTags()){
            if($p->move()){
                echo 1;
            }
    }
}
