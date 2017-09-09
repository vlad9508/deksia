<?php
	$fecha = $_POST['fecha'];
	$empresa = $_POST['empresa'];
	$cliente = $_POST['cliente'];
	$total = $_POST['total'];
	$sub = $_POST['sub'];
	$iva = $_POST['iva'];
	$tri = $_POST['tri'];
	$tri2 = $_POST['tri2'];
	$tri3 = $_POST['tri3']:
	$conce = $_POST['conce'];
	$conce2 = $_POST['conce2'];
	$conce3 = $_POST['conce3'];
	$conce4 = $_POST['conce4'];
	$conce5 = $_POST['conce5'];

	$con=mysqli_connect("localhost", "root", "") or die("error al establecer la conexion");
	$db=mysqli_select_db("factura", $con);
?>