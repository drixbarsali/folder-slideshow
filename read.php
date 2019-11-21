<?php

$img_dir = "pictures/";
$images = scandir($img_dir);
foreach($images as $img) 	{ 
		if($img === '.' || $img === '..') {continue;} 		

			if (  (preg_match('/.jpg/',$img))  ||  (preg_match('/.jpeg/',$img))  ||  (preg_match('/.gif/',$img)) || (preg_match('/.tiff/',$img)) || (preg_match('/.png/',$img)) ) {				

			 $html .='
					<div><img style="height:100%" src="'.$img_dir.$img.'" ></div>' ; 
			} else { continue; }
	} ; 
echo $html ;

?>