<?php
$directory=__DIR__;
if($handle=opendir($directory)) {
    // keep reading the directory entries 'till the end
    $files=[];
    while ($file = readdir($handle)) {

        // just skip the reference to current and parent directory

        if ($file != "." && $file != ".." && is_dir($file)) {
            array_push($files,$file);
        }
    }
    echo json_encode($files);
}
