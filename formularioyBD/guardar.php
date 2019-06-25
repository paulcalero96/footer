<?php
	//conectamos Con el servidor
	$conectar=@mysql_connect('localhost','root','');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

		$base=mysql_select_db('inventario');
		if(!$base){
			echo"No Se Encontro La Base De Datos";
		}
	}
	//recuperar las variables
	$nombre=$_POST['nombre'];
	$fecha=$_POST['fecha'];
	$descripcion=$_POST['descripcion'];
	//hacemos la sentencia de sql
	$sql="INSERT INTO comentarios VALUES('$nombre',
								   '$fecha',
								   '$descripcion')";
	//ejecutamos la sentencia de sql
	$ejecutar=mysql_query($sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Hubo Algun Error";
	}else{
		echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
	}
?>
