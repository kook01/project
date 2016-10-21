<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (trim($_FILES["fileUpload"]["tmp_name"]) != "") {
            $images = $_FILES["fileUpload"]["tmp_name"];
            $new_images = "Thumbnails_" . $_FILES["fileUpload"]["name"];
            copy($_FILES["fileUpload"]["tmp_name"], "image_product/" . $_FILES["fileUpload"]["name"]);
            $width = 100; //*** Fix Width & Heigh (Autu caculate) ***//
            $size = GetimageSize($images);
            $height = round($width * $size[1] / $size[0]);
            $images_orig = ImageCreateFromJPEG($images);
            //$images_orig = imagecreateFrompng($images);
            $photoX = ImagesX($images_orig);
            $photoY = ImagesY($images_orig);
            $images_fin = ImageCreateTrueColor($width, $height);
            ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
            ImageJPEG($images_fin, "image_product/" . $new_images);
            ImageDestroy($images_orig);
            ImageDestroy($images_fin);
        }
        ?>
        <b>Original Size</b><br>
        <img src="<?php echo "image_product/" . $_FILES["fileUpload"]["name"]; ?>">
        <hr>
        <b>New Resize</b><br>
        <img src="<?php echo "image_product/" . $new_images; ?>">
    </body>
</html>
