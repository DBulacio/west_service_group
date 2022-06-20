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
    
    $producto = $_POST["producto"];
    $precio = $_POST["precio"];
?>

<div class="container-fluid padding">
<div class="row welcome text-center">
	<div class="col-12">
		<h1 class="display-4">Contact</h1>
	</div>
	<hr>
    <div class="col-1">
    </div>
	<div class="col-sm-12 col-lg-10">
        <form action="form_envio/contacto_form.php" method="POST">
            <div class="form-group">
                <label for="Input_Nombre">Name</label>
                <input type="text" class="form-control" id="Input_Nombre" name="nombre" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label for="Input_Email">Email address</label>
                <input type="email" class="form-control" id="Input_Email" name="email" placeholder="Email address" required>
            </div>
            <div class="form-group">
                <label for="Input_Telefono">Phone</label>
                <input type="text" class="form-control" id="Input_Telefono" name="telefono" placeholder="Phone" required>
            </div>
            <div class="form-group">
                <label for="Input_Empresa">Company</label>
                <input type="text" class="form-control" id="Input_Empresa" name="empresa" placeholder="Company">
            </div>
            <div class="form-group">
                <label for="Input_Web">Website</label>
                <input type="text" class="form-control" id="Input_Web" name="website" placeholder="Website">
            </div>

            <!-- TRAIGO EL PRODUCTO Y EL PRECIO -->
            <div class="form-group">
                <label for="Input_Product">Product</label>
                <input readonly type="text" class="form-control" id="Input_Product" name="producto" value="<?php echo $producto;?>">
            </div>
            <div class="form-group">
                <label for="Input_Prize">Prize</label>
                <input readonly type="text" class="form-control" id="Input_Prize" name="precio" value="<?php echo $precio;?>">
            </div>
            <!-- FIN TRAIGO EL PRODUCTO Y EL PRECIO -->

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
	</div>
    <div class="col-1">
    </div>
</div>
</div>

<?php
    include 'index_pie.php';
?>

</body>
</html>