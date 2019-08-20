<?php
    $x;
    $y;
    $pos1;
    $pos2;
    $height;
    $width;

    $img = str_replace('data:image/png;base64,', '', $_POST["img"]);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	$file = uniqid() . '.png';
	$success = file_put_contents($file, $data);
    // print $success ? $file : 'Unable to save the file.';
    $dest= imagecreatefrompng($file);
    
    if(!empty($_POST["sticker"]))
    {
        $emo = explode ('cam/',$_POST["sticker"]);   
        $src = imagecreatefrompng($emo[1]);
        $width = ImageSx($src);
        $height = ImageSy($src);
        $x = $width/5; $y = $height/5;
        ImageCopyResampled($dest,$src,0,0,0,0,$x,$y,$width,$height);
    }
    
   
    
    imagepng($dest, $file);