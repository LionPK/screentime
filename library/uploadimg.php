<?php

function uploadimg($filename, $width, $get_height, $path) {
    if (trim($_FILES["fileupload"]["tmp_name"]) != "") {
        $tmp_images = $_FILES["fileupload"]["tmp_name"];
        // type select
        if ($_FILES['fileupload']['type'] == 'fileupload/jpeg' OR $_FILES['fileupload']['type'] == 'fileupload/jpg' OR $_FILES['fileupload']['type'] == 'fileupload/pjpeg') {
            $images = $filename . ".jpg";
            //upload source image
            $size = getimagesize($tmp_images);
            //check radio widht and height
            $height = round($width * $size[1] / $size[0]);
            if ($height > $get_height) {
                $width = round($get_height * $size[0] / $size[1]);
                $height = $get_height;
            }
            $images_orig = ImageCreateFromJPEG($tmp_images);
            $photoX = ImagesX($images_orig);
            $photoY = ImagesY($images_orig);
            $images_fin = ImageCreateTrueColor($width, $height);
            ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
            ImageJPEG($images_fin, $path . $images);
            ImageDestroy($images_orig);
            ImageDestroy($images_fin);
            return $filename . ".jpg";
        } elseif ($_FILES['fileupload']['type'] == 'fileupload/x-png' OR $_FILES['fileupload']['type'] == 'fileupload/png') {
            $images = $filename . ".png";
            $size = getimagesize($tmp_images);
            //check radio widht and height
            $height = round($width * $size[1] / $size[0]);
            if ($height > $get_height) {
                $width = round($get_height * $size[0] / $size[1]);
                $height = $get_height;
            }
            $images_orig = ImageCreateFromPNG($tmp_images);
            $photoX = ImagesX($images_orig);
            $photoY = ImagesY($images_orig);
            $images_fin = ImageCreateTrueColor($width, $height);
            ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
            Imagepng($images_fin, $path . $images);
            ImageDestroy($images_orig);
            ImageDestroy($images_fin);
            return $filename . ".png";
        } elseif ($_FILES['fileupload']['type'] == 'fileupload/gif') {
            $images = $filename . ".gif";
            $size = getimagesize($tmp_images);
            //check radio widht and height
            $height = round($width * $size[1] / $size[0]);
            if ($height > $get_height) {
                $width = round($get_height * $size[0] / $size[1]);
                $height = $get_height;
            }
            $images_orig = ImageCreateFromgif($tmp_images);
            $photoX = ImagesX($images_orig);
            $photoY = ImagesY($images_orig);
            $images_fin = ImageCreateTrueColor($width, $height);
            ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
            Imagegif($images_fin, $path . $images);
            ImageDestroy($images_orig);
            ImageDestroy($images_fin);
            return $filename . ".gif";
        } else {
            return FALSE;
        }
    }
}

function checkimg() {
    if ($_FILES['fileupload']['type'] == 'fileupload/jpeg' OR $_FILES['fileupload']['type'] == 'fileupload/jpg' OR $_FILES['fileupload']['type'] == 'fileupload/pjpeg' OR $_FILES['fileupload']['type'] == 'fileupload/x-png' OR $_FILES['fileupload']['type'] == 'fileupload/png' OR $_FILES['fileupload']['type'] == 'fileupload/gif') {
        return TRUE;
    } else {
        return FALSE;
    }
}
