<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>West Services Group | Welcome</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
</head>
<body>

<!-- Navigation -->
<?php
    include 'index_encabezado.php';
?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="img/back4.jpg" alt="First slide">
			<div class="carousel-caption">
				<h1 class="display-2">CONTACT CENTER</h1>
				<h3>customized campaigns for our clients.</h3>
				<a href="contact_center.php" class="button btn btn-outline-light btn-lg" role="button" aria-pressed="true">>></a>
			</div>  
    	</div>
    	<div class="carousel-item">
			<img class="d-block w-100" src="img/back.jpg" alt="Second slide">
			<div class="carousel-caption">
				<h1 class="display-2">WEB DEVELOPMENT</h1>
				<h3>mobile first responsive web design.</h3>
				<a href="web_development.php" class="button btn btn-outline-light btn-lg" role="button" aria-pressed="true">Get Started!</a>
			</div>  
    	</div>
    	<div class="carousel-item">
			<img class="d-block w-100" src="img/back2.jpg" alt="Third slide">
			<div class="carousel-caption">
				<h1 class="display-2">Community Management</h1>
				<h3>adapted to your business model.</h3>
				<a href="community_management.php" class="button btn btn-outline-light btn-lg" role="button" aria-pressed="true">Learn More!</a>
			</div> 
   		</div>
   		<div class="carousel-item">
		    <img class="d-block w-100" src="img/back3.jpg" alt="Fourth slide">
			<div class="carousel-caption">
				<h1 class="display-2">E-Commerce</h1>
				<h3>you set the goals. We will fulfill them.</h3>
				<a href="ecommerce.php" class="button btn btn-outline-light btn-lg" role="button" aria-pressed="true">!</a>
			</div>
   		</div>
 	</div>
 	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    	<span class="sr-only">Previous</span>
  	</a>
  	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
    	<span class="sr-only">Next</span>
 	</a>
</div>	

<!--- Welcome Section -->
<div class="container-fluid padding">
<div class="row welcome text-center">
	<div class="col-12">
		<h1 class="display-4">Built with ease.</h1>
	</div>
	<hr>
	<div class="col-12">
		<p class="lead">All your digital presence managed in a unified and coherent way. We design and manage your Web or E-commerce, advertising on Facebook and Instagram</p>
	</div>
</div>
</div>

<!--- Three Column Section -->
<div class="container-fluid padding">
<div class="row text-center padding">
	<div class="col-xs-12 col-sm-6 col-md-4">
		<i class="fas fa-code"></i>
		<h3>HTML5</h3>
		<p>Built with the latest version of HTML</p>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
		<i class="fas fa-bold"></i>
		<h3>BOOTSTRAP</h3>
		<p>Responsive websites | Mobile first</p>
	</div>
	<div class="col-sm-12 col-md-4">
		<i class="fab fa-css3"></i>
		<h3>CSS3</h3>
		<p>Designed with the most advanced standard available</p>
	</div>
</div>
</div>

<!--- Footer -->
<?php
    include 'index_pie.php';
?>

</body>
</html>