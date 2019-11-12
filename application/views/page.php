<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CommonChild</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<!--Bootstrap y estilo-->
	<link rel="stylesheet"  href="<?php echo base_url('assets/css/bootstrap.min.css'); ?> ">
	<link rel="stylesheet"  href="<?php echo base_url('assets/css/bootstrap.css'); ?> ">

</head>

<!--Inicio del Body-->
<body>

	
	<div class="container-fluid contenedor-form d-flex flex-column h-100 align-items-center mt-5">
		<h2>Ingrese dos cadenas (c1 y c2)</h2>

		<form action="<?php echo base_url('Principal_Controller/index'); ?>" method="post">

		  <div class="form-group">
		  	<label for="string1">Cadena nº 1:</label>
		    <input type="text" class="form-control" id="string1" name="string1" placeholder="C1..." value="<?php echo set_value('string1')?>" required>
		    <div><?php echo form_error('string1'); ?></div>
		  </div>

		  <div class="form-group">
		    <label for="string2">Cadena nº 2:</label>
		    <input type="text" class="form-control" id="string2"  name="string2" placeholder="C2..." value="<?php echo set_value('string2')?>" required>
		    <div><?php echo form_error('string2'); ?></div>
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
		 <br />

<?php if ($result == true) { ?>
		<div class="form-group">
		    <label for="resultado">Longitud hijo en comun: </label>
		    <output><?php echo $result ?></output>
		  </div>
		<?php } ?>


	</div>

</body>
<!--Fin del Body-->
</html>