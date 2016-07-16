<?php
include "conexion.php";

$nom=$_POST['nombre'];
$dir=$_POST['dir'];
$rfc=$_POST['Rfc'];
$tel=$_POST['tel'];
$clasif=$_POST['classif'];
$lat=$_POST['lat'];
$longt=$_POST['long'];
$foto="r/images/".$rfc.".jpg";

$sql="INSERT INTO servicios (IdServicios, NombreServicio, Direccion, RFC, Telefono, Latitud, Longitud, Foto,clasificacion_id) VALUES('','$nom','$dir','$rfc','$tel','$lat','$longt', '$foto','$clasif')";
$res=mysqli_query($conexion,$sql);
if($res){
		echo "Los datos se registraron de manera exitosa";
	  echo "nombre:".$nom." Dirección:".$dir." RFC:".$rfc." Teléfono:".$tel." Clasificación:".$clasif." Latitud:".$lat." Longitud:".$longt." Foto:".$foto;
	}else{
  	echo "Se produjo un error al momento de registar los datos:".mysqli_error();
		}
mysqli_close($conexion);
?>
