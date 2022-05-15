<?php
$precio = $_POST['precio1'];
$impuesto = $_POST['impuestos'];
$promocion = $_POST['promocion'];
if ($promocion == "descuento") {
	if ($impuesto == "porcentaje1") {
		$final = $precio - ($precio * 0.01);
		$impuesto = "4%";
		$descuento = $precio * 0.05;
		$promocion = "descuento del 5%";
	}
	elseif ($impuesto == "porcentaje2") {
		$final = $precio + ($precio * 0.02);
		$impuesto = "7%";
		$descuento = $precio * 0.05;
		$promocion = "descuento del 5%";
	}
	elseif ($impuesto == "porcentaje3") {
		$final = $precio + ($precio * 0.11);
		$impuesto = "16%";
		$descuento = $precio * 0.05;
		$promocion = "descuento del 5%";
	}
	else {
		$final = $precio + ($precio * 0.20);
		$impuesto = "25%";
		$descuento = $precio * 0.05;
		$promocion = "descuento del 5%";
	}
}
else {
	if ($impuesto == "porcentaje1") {
		$final = $precio + ($precio * 0.04);
		$impuesto = "4%";
	}
	elseif ($impuesto == "porcentaje2") {
		$final = $precio + ($precio * 0.07);
		$impuesto = "7%";
	}
	elseif ($impuesto == "porcentaje3") {
		$final = $precio + ($precio * 0.16);
		$impuesto = "16%";
	}
	else {
		$final = $precio + ($precio * 0.25);
		$impuesto = "25%";
	}
}
echo "<br/> &nbsp; DATOS RECIBIDOS";
echo "<br/> &nbsp; Precio producto: ", $precio, " euros";
echo "<br/> &nbsp; Impuestos del producto: ", $impuesto;
echo "<br/> &nbsp; Con la siguiente prompción: ", $promocion;
if ($promocion == "descuento del 5%") {
	echo "<br/> &nbsp; Se ha ahorrado: ", $descuento, " euros";
}
echo "<br/> &nbsp; El precio final del producto es: ", $final, " euros";
?>