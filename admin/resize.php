<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$rPath = "./icons/";

function getImageSizeKeepAspectRatio( $imageUrl, $maxWidth, $maxHeight) {
	$imageDimensions = getimagesize($imageUrl);
	$imageWidth = $imageDimensions[0];
	$imageHeight = $imageDimensions[1];
	$imageSize['width'] = $imageWidth;
	$imageSize['height'] = $imageHeight;
	if($imageWidth > $maxWidth || $imageHeight > $maxHeight) {
		if ($imageWidth > $imageHeight) {
	    	$imageSize['height'] = floor(($imageHeight/$imageWidth)*$maxWidth);
  			$imageSize['width']  = $maxWidth;
		} else {
			$imageSize['width']  = floor(($imageWidth/$imageHeight)*$maxHeight);
			$imageSize['height'] = $maxHeight;
		}
	}
	return $imageSize;
}

$rURL = $_GET["url"];
$rMax = $_GET["max"];

if ($rURL && $rMax) {
	header('Content-Type: image/png');
	$rImagePath = $rPath.md5($rURL)."_".$rMax.".png";
	if (!file_exists($rImagePath)) {
		list($rWidth, $rHeight) = getimagesize($rURL);
		$rImageSize = getImageSizeKeepAspectRatio($rURL, $rMax, $rMax);
        if (($rImageSize["width"]) && ($rImageSize["height"])) {
            $rImageP = imagecreatetruecolor($rImageSize["width"], $rImageSize["height"]);
            $rImage = imagecreatefrompng($rURL);
            imagealphablending($rImageP, false);
            imagesavealpha($rImageP, true);
            imagecopyresampled($rImageP, $rImage, 0, 0, 0, 0, $rImageSize["width"], $rImageSize["height"], $rWidth, $rHeight);
            imagepng($rImageP, $rImagePath);
        } else {
            exit;
        }
	}
	echo file_get_contents($rImagePath);
}
?>