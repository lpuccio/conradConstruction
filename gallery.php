<?php
	$defaultClass = "class='col-sm-2 col-xs-4'";
	$class = array(
			"exteriors" => $defaultClass,
			"kitchens" => $defaultClass,
			"livingrooms" => $defaultClass,
			"bathrooms" => $defaultClass,
			"basements" => $defaultClass,
			"decorative" => $defaultClass
		);
	if (!isset($_GET['section']) || !isset($class[$_GET['section']])){
		$sect = "exteriors";
		$class[$sect] = 'class="selected col-sm-2 col-xs-4"';		
	}
	else{
		$sect = $_GET['section'];
		$class[$sect] = 'class="selected col-sm-2 col-xs-4"';
	}


?>

<div id='galleryList' class='row'>
	<div <?php echo $class['exteriors'] ?>><a href="index.php?page=gallery&section=exteriors">Exteriors</a></div>
	<div <?php echo $class['kitchens'] ?>><a href="index.php?page=gallery&section=kitchens">Kitchens</a></div>
	<div <?php echo $class['livingrooms'] ?>><a href="index.php?page=gallery&section=livingrooms">Living rooms</a></div>
	<div <?php echo $class['bathrooms'] ?>><a href="index.php?page=gallery&section=bathrooms">Bathrooms</a></div>
	<div <?php echo $class['basements'] ?>><a href="index.php?page=gallery&section=basements">Basements</a></div>
	<div <?php echo $class['decorative'] ?>><a href="index.php?page=gallery&section=decorative">Decorative</a></div>

</div>

<div class='row'>
	<div id="galleryParent">
		<?php
			$slidePath = "img/" . $sect . "/";
			$fileNames = scandir($slidePath);
			$fInfo = finfo_open(FILEINFO_MIME);
			for($i = 0; $i < count($fileNames); $i++){
				if (stripos(finfo_file($fInfo, $slidePath . $fileNames[$i]), "image/") !== false){
					echo '<div class="col-xs-6 col-sm-2">';
					echo '<a href="' . $slidePath . $fileNames[$i] . '" data-toggle="lightbox" data-gallery="gallery" data-gallery_parent_selector="#galleryParent"><img src="' . $slidePath . $fileNames[$i] . '" class="img-responsive thumbnail" /></a>';
					echo '</div>';
				}
			}
			finfo_close($fInfo);


		?>
	</div>
	

</div>