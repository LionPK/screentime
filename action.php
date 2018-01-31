<?php

<?php

if($action=="add"){
//*****************************************
if ($artist_picture!= '') {
    $path='adminweb/picture_upload/';
    $file=$_FILES['artist_picture']['name'];
    $file_type=substr($file,strlen($file)-4,strlen($file));
    $pic_name='artist_picture_'.$artist_id.strtoupper($file_type);
    $artist_picture=$pic_name;
    // เริ่มกระบวนการรีไซต์ รูปภาพ
    copy ($_FILES['artist_picture']['tmp_name'],$path.$pic_name); //ทำการ copy รูป
    
    $images = $path.$pic_name;
    $height = 255; //กำหนดขนาดความสูง
    $size = getimagesize($images);
    $width = round($height*$size[0]/$size[1]); //ขนาดความกว้่างคำนวนเพื่อความสมส่วนของรูป
    if($size[2] == 1) {
        $images_orig = imagecreatefromgif($images); //resize รูปประเภท GIF
    } else if($size[2] == 2) {
        $images_orig = imagecreatefromjpeg($images); //resize รูปประเภท JPEG
    }
    $photoX = imagesx($images_orig);
    $photoY = imagesy($images_orig);
    $images_fin = imagecreatetruecolor($width, $height);
    imagecopyresampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
    imagejpeg($images_fin, $images); //ชื่อไฟล์ใหม่
    imagedestroy($images_orig);
    imagedestroy($images_fin);
}
//*****************************************

}
?>