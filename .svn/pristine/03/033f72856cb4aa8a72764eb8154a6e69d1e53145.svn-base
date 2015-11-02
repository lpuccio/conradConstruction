<?php
$slidePath = "img/slideshow/";
$fileNames = scandir($slidePath);
$fInfo = finfo_open(FILEINFO_MIME);
$active = " active";
for($i = 0; $i < count($fileNames); $i++){
	if (stripos(finfo_file($fInfo, $slidePath . $fileNames[$i]), "image/") !== false){
		echo '<div class="item' . $active . '">';
		echo ' <img src="' . $slidePath . $fileNames[$i] . '" class="img-responsive carousel-size">';
		echo '<div class="carousel-caption"></div></div>';
		$active = "";
	}
}
finfo_close($fInfo);



?>