<?php
	$connect = @mysqli_connect("localhost","root","", "basedatosmaster") or die("No se encontró el servidor");
	mysqli_select_db( $connect, "basedatosmaster")or die("No se encontró la base de datos");
?>