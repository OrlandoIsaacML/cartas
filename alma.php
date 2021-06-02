<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>TEST</title>
</head>
<body background="avengers.png">
    <font color="aqua">CARGANDO..</font>
    <p><!-- en este apartado deberia de estar todas las fotos y nombre que se lanzaran en forma aleatoria para combinarla con el nombre y epellido -->
        <!-- tambien se esconde la forma FWRITE,ECHO y el FOPEN -->
        <?php
        $aleatorio="";
        $alename=array("HAWKEYE","IRON MAN","CAPTAIN AMERICA","HULK","THOR","BLACK WIDOW","ANT-MAN","BLACK PANTHER","CAPTAIN AMERICA","DR.STRANGE","CAPTAIN MARVEL","QUICKSILVER","SPIDER-MAN","VISION","WASP","SACRLET WITCH","WINTER SOLDIER","WAR MACHINE");
        $son=count($alename);
        $nV=mt_rand(0,$son-1);
switch($nV)
{
case 0: $av="<img src='ronin.png' width='158px' height='158px'>"; break; 
case 1: $av="<img src='ironman.png' width='158px' height='158px'>"; break;
case 2: $av="<img src='cap.png' width='158px' height='158px'>"; break; 
case 3: $av="<img src='hulk.png' width='158px' height='158px'>"; break; 
case 4: $av="<img src='thor.png' width='158px' height='158px'>"; break; 
case 5: $av="<img src='widow.png' width='158px' height='158px'>"; break; 
case 6: $av="<img src='ant.png' width='158px' height='158px'>"; break; 
case 7: $av="<img src='bp.png' width='158px' height='158px'>"; break; 
case 8: $av="<img src='cap2.png' width='158px' height='158px'>"; break; 
case 9: $av="<img src='dr.png' width='158px' height='158px'>"; break; 
case 10: $av="<img src='mar.png' width='158px' height='158px'>"; break; 
case 11: $av="<img src='quik.png' width='158px' height='158px'>"; break; 
case 12: $av="<img src='spidey.png' width='158px' height='158px'>"; break; 
case 13: $av="<img src='vision.png' width='158px' height='158px'>"; break; 
case 14: $av="<img src='wasp.png' width='158px' height='158px'>"; break; 
case 15: $av="<img src='wanda.png' width='158px' height='158px'>"; break; 
case 16: $av="<img src='winter.png' width='158px' height='158px'>"; break; 
case 17: $av="<img src='wm.png' width='158px' height='158px'>"; break; 
}

$archi1=fopen("archivo.txt", "a") 
or die("ERROR EN CONEXION DE RED"); 
fwrite($archi1, ""); 
fwrite($archi1, "\n");
fwrite($archi1, "Datos:"); 
fwrite($archi1, "\n");
fwrite($archi1, $_POST['nom']); 
fwrite($archi1, " "); 
fwrite($archi1, $alename [$nV]); 
fwrite($archi1, " ");
fwrite($archi1, $_POST['ape']); 
fwrite($archi1, "\n");
fwrite($archi1, "\n");
fwrite($archi1, $av); 
fwrite($archi1, "\n");
fwrite($archi1, "⚀ ⚀ ⚀ ⚀ ⚀ ⚀ ⚀ ⚀ ⚀ ⚀ ⚀ ⚀ ⚀ ⚀ ⚀ ⚀"); 
fwrite($archi1, "\n"); 
fclose($archi1);
echo ("<br>");
echo ($_POST['nom'] ); 
echo ($alename[$nV]); 
echo (" "); 
echo($_POST[ 'ape']); 
echo("<br>");
echo("$av");
print("<br>"); 
echo("Datos solicitado completados");
?> </p>
<!-- tiende el codigo del cliente a nomostrar el codigo completo ,por eso mayormente el resultado que se logro-->
</center>
</body> 
</html>