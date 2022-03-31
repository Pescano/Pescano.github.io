<?php
$precio = $_POST['precio1'];
$impuesto = $_POST['impuestos'];
$promocion = $_POST['promocion'];
if ($promocion == "descuento") {
	if ($impuesto == "porcentaje1") {
		$final = $precio + ($precio * 0.09);
		$impuesto = "4";
	}
	elseif ($impuesto == "porcentaje2") {
		$final = $precio + ($precio * 0.12);
		$impuesto = "7";
	}
	elseif ($impuesto == "porcentaje3") {
		$final = $precio + ($precio * 0.21);
		$impuesto = "16";
	}
	else {
		$final = $precio + ($precio * 0.30);
		$impuesto = "25";
	}
}
else {
	if ($impuesto == "porcentaje1") {
		$final = $precio + ($precio * 0.04);
		$impuesto = "4";
	}
	elseif ($impuesto == "porcentaje2") {
		$final = $precio + ($precio * 0.07);
		$impuesto = "7";
	}
	elseif ($impuesto == "porcentaje3") {
		$final = $precio + ($precio * 0.16);
		$impuesto = "16";
	}
	else {
		$final = $precio + ($precio * 0.25);
		$impuesto = "25";
	}
}
echo "<br/> &nbsp; DATOS RECIBIDOS";
echo "<br/> &nbsp; Precio producto: ", $precio, " euros";
echo "<br/> &nbsp; Impuestos del producto: ", $impuesto, "%";
echo "<br/> &nbsp; Con la siguiente prompción: ", $promocion;
echo "<br/> &nbsp; El precio final del producto es: ", $final, " euros";
?>