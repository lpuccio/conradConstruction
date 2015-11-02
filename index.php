<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Conrad Construction - Home Renovation in New Jersey</title>
<script src="js/jquery-1.11.1.min.js" ></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<link rel="stylesheet" type="text/css" href="css/ekko-lightbox.min.css" />


<script src="js/require.js"></script>
<script src="js/app.js"></script>

<script type="text/javascript">
	$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
	    event.preventDefault();
	    $(this).ekkoLightbox();
	}); 

</script>

</head>

<body class="container">
	 <header class="row">
	 	<div class="col-md-6 col-sm-12">
		 	<div id="headerImage">
		 		<img src="img/CCLogo.png" class="img-responsive center-block" />
		 	</div>
		 	
		 		<ul class="contactInfo center-block">
			 		<li><small>223 Carteret Ave. Seaside Heights, NJ 08753</small></li>
			 		<li><small>conradconstruction@icloud.com</small></li>
			 		<li><small>(732) 250-8528</small></li>
			 	</ul>
		 	
			<nav>
				<div>
			 		<a id="homeLink" class="h4" href="index.php?page=home">Home</a>
			 	</div>
			 	<div class="dropdown">
				 	<a id="galleryLink" class="h4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gallery</a>
				 	<ul id="galleryMenu" class="dropdown-menu" role="menu" aria-labelledby="dLabel">
				 		<li><a href="index.php?page=gallery&amp;section=exteriors">Exteriors</a></li>
				 		<li><a href="index.php?page=gallery&amp;section=kitchens">Kitchens</a></li>
				 		<li><a href="index.php?page=gallery&amp;section=livingrooms">Living rooms</a></li>
				 		<li><a href="index.php?page=gallery&amp;section=bathrooms">Bathrooms</a></li>
				 		<li><a href="index.php?page=gallery&amp;section=basements">Basements</a></li>
				 		<li><a href="index.php?page=gallery&amp;section=decorative">Decorative</a></li>
				 	</ul>
				 </div>
				<div>
			 		<a id="contactUsLink" class="h4" href="index.php?page=contactus">Contact us</a>
			 	</div>
			 	
			 </nav>
		 </div>
		 <div id="slideshowContainer" class="col-md-6 hidden-sm hidden-xs">

		 	<div id="carousel-example-generic" data-interval="6000" class="carousel slide carousel-size" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>
				   <div class="carousel-inner" role="listbox">
					<?php

						include "carousel.php";
						

					 ?>
					</div>
				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
		 </div>
	 </header> 
		 <div class="row">
			 <div class="col-xs-12">
		 		<section id="mainContent" >
					<?php
						if (!isset($_GET['page'])){
							include "home.php";
						}
						else{
							$link = strtolower($_GET['page']) . '.php';
							if((@include $link) === false){
								include 'home.php';
							}
						}

					?>
		 		</section>
			 </div>
		</div>
		<footer class="row">
			<div class="col-xs-12 text-center">
				<h6><small>&copy; 20xx-2014 Conrad Contruction, LLC</small></h6>
			</div>
		</footer>
</body>
</html>
