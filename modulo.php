<?php
	$fecha = $_POST['fecha'];
	$empresa = $_POST['empresa'];
	$cliente = $_POST['cliente'];
	$total = $_POST['total'];
	$sub = $_POST['sub'];
	$iva = $_POST['iva'];
	$tri = $_POST['tri'];
	$tri2 = $_POST['tri2'];
	$tri3 = $_POST['tri3'];
	$conce = $_POST['conce'];
	$conce2 = $_POST['conce2'];
	$conce3 = $_POST['conce3'];
	$conce4 = $_POST['conce4'];
	$conce5 = $_POST['conce5'];

	$con=mysqli_connect("localhost", "root", "", "factura") or die("error al establecer la conexion");
	//$db=mysqli_select_db("facturas", $con);

	mysqli_query($con, "INSERT INTO facturas VALUES('', '". $fecha ."', '".$empresa."', '".$cliente."', ".$total.", ".$sub.", ".$iva.", '".$tri."', '".$tri2."', '".$tri3."', '".$conce."', '".$conce2."', '".$conce3."', '".$conce4."', '".$conce5."'); ");
	mysql_close($con);

	$file = fopen("factura_". $cliente . ".ini", "a");
	fwrite($file, "[Factura 1] \r\n fecha: ". $fecha . "\r\n empresa: ". $empresa . "\r\n cliente: ". $cliente . "\r\n total: ". $total . "\r\n sub total: ". $sub . "\r\n iva: ". $iva. "\r\n triple: ". $tri . "\r\n concepto: ". $conce . "\r\n");
	fclose($file);
?>