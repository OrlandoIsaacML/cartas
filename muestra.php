<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TEST</title>
</head>
<body background="fondo.png">
	<font color="">MOSTRANDO DATOS..</font><br><br>
	<p>
	<?php
$archi1=fopen("archivo.txt", "r") 
	or die("ERROR EN CONEXION DE RED");
	while (!feof($archi1)) {
		$traet=fgets($archi1);
		$altoLi=nl2br($traet);
		echo $altoLi;
	}

?></p>

<p><font color="white" size="3" face="Arial Black">
Continue insertando datos y apriete el boton1 </p></font>




</body>
</html>