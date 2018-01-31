<?php

require(base_path() . "/library/uploadimg.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new database();
    if (checkimg() == TRUE) {
        $filename = date('YmdHis') . rand(0, 9);
        $type = end(explode(".", $_FILES["fileupload"]["name"]));
        $fileupload = $filename . "." . $type;

        $path = base_path() . "/upload/sreentime/";
        uploadimg($filename, 600, 600, $path);
        uploadimg("thumb_" . $filename, 400, 400, $path);
        uploadimg("md_" . $filename, 150, 150, $path);
        uploadimg("sm_" . $filename, 70, 70, $path);
    } else {
        $fileupload = "screentime.jpg";
    }
    $value_pd = array(
        "type" => trim($_POST['type']),
        "name" => trim($_POST['name']),
        "text" => trim($_POST['fileupload']),
        "fileupload" => $fileupload,
    
    $query_pd = $db->insert("knowledge", $value_pd);

    if ($query_pd == TRUE) {
        header("location:" . $baseUrl . "/views/knowledge");
    }
    mysql_close();
}