<?php 
    class ImageResizeHelper {
        static function resizeImage($name, $newWidth=1920, $newHeight = 1080) {


			$size = getimagesize($name);
			$typeImage = exif_imagetype($name);
			

			$width = $size[0];
			$height = $size[1];

			$kWidth = $width / $newWidth;
			$kHeight = $height / $newHeight;

			if($kWidth>$kHeight) {
				$kAll = $kWidth;
			}
			else {
				$kAll = $kHeight;
			}

			$newWidth = $width / $kAll;
			$newHeight = $height / $kAll;

			$im1=imagecreatetruecolor($newWidth, $newHeight);
			switch($typeImage) {
				case 1:
					$im=imagecreatefromgif($name);
					imagecolortransparent($im1, imagecolorallocatealpha($im1, 0, 0, 0, 127));
					imagealphablending($im1, false);
					imagesavealpha($im1, true);
					break;
				case 2:
					$im=imagecreatefromjpeg($name);
					break;
				case 3:
					$im=imagecreatefrompng($name);
					imagecolortransparent($im1, imagecolorallocatealpha($im1, 0, 0, 0, 127));
					imagealphablending($im1, false);
					imagesavealpha($im1, true);
					break;
				case 6:
					$im=imagecreatefrombmp($name);
					break;
				default: 
					throw new MyException('Можно загрузить только картинку', 30000);
			}
			
			imagecopyresampled($im1,$im,0,0,0,0,$newWidth,$newHeight,imagesx($im),imagesy($im));

			switch($typeImage) {
				case 1:
					imagegif($im1, $name);
					break;
				case 2:
					imagejpeg($im1, $name);
					break;
				case 3:
					imagepng($im1, $name);
					break;
				case 6:
					imagebmp($im1, $name);
					break;
				default: 
					throw new FileException('Можно загрузить только картинку', 60005);
			}

			imagedestroy($im);
			imagedestroy($im1);
        }

    }

?>