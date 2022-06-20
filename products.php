<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Products | West Services Group</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="style_products.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
</head>
<body>

<!-- Navigation -->
<?php
    include 'index_encabezado.php';
?>

    <img class="service-top-img" src="img/background.jpg">
			
<!--- Welcome Section -->
<div class="container-fluid padding">
	<div class="row welcome3 text-center">
		<div class="col-12">
			<h1 class="display-4">We are an OrienTek reseller</h1>
		</div>
		<hr>
		<div class="col-12">
			<p class="lead">And our products are: </p>
		</div>
	</div>
</div>

<div class="container">
  <ul class="grid">
    <li class="card">
      <a class="card__link" href="product_01.php"><img class="card__image" src="img/products/T45_fusion_splicer.jpg" />
        <div class="card__text">
          T45 Fusion Splicer
        </div>
      </a>
    </li>
    <li class="card">
      <a class="card__link" href="product_02.php"><img class="card__image" src="img/products/T30_fiber_cleaver.jpg" />
        <div class="card__text">
          T30C Fiber Cleaver
        </div>
      </a>
    </li>
    <li class="card">
      <a class="card__link" href="product_03.php"><img class="card__image" src="img/products/OTDR_k70.jpg" />
        <div class="card__text">
          All-in-1 All Fiber OTDR K70
        </div>
      </a>
    </li>
    <li class="card">
      <a class="card__link" href="#"><img class="card__image" src="img/products/Toolkit.jpg" />
        <div class="card__text">
          Tool Kit
        </div>
      </a>
    </li>
  </ul>
</div>

<?php
    include 'index_pie.php';
?>

</body>
</html>