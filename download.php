<?php
if(!empty($_GET['submission'])){
    $filename=basename($_GET['submission']);
    $filepath="videos.mp4/".$filename;
    if(!empty($filename) && file_exists($filepath)){
        header("Cache-Control:public");
        header("Content-Description:File Transfer");
        header("Content-Disposition:attachment; filename=$filename");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");

        readfile($filepath);
        exit;
    }
    else{
        echo "file not exists";
    }
}


?>