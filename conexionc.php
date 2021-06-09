<?php
	//Variables de conexión
	$usuario = "root";
	$pass = "password";
	$server = "localhost";
	$db = "patitos";
	$conn = mysqli_connect($server,$usuario,$pass,$db) or die ("Error de conexión");
	//Variables que almacenan los datos ingresados por el usuario
	$id = $_POST["idcrear"];
	$nombre = $_POST["nombrecrear"];
	$prov = $_POST["proveedorcrear"];
	$cant = $_POST["cantidadcrear"];
	$costo = $_POST["costocrear"];
	$fecha = $_POST["fechacrear"];
	//Variables con las consultas INSERT, UPDATE y DELETE
	$insertar = "INSERT INTO inventario (idProducto, nombreProducto, proveedorProducto, cantidadProducto, costoProducto, fechaEntrada)
	VALUES('$id','$nombre','$prov','$cant','$costo','$fecha')";
	$actualizar ="UPDATE inventario SET nombreProducto= '$nombre', proveedorProducto = '$prov', cantidadProducto= '$cant', costoProducto= '$costo', fechaEntrada='$fecha' WHERE idProducto= '$id'";
	$eliminar = "DELETE FROM inventario WHERE idProducto = '$id'";
	//Condicionales para realizar la consulta de acuerdo a la opción elegida
	if($_POST[crea]){
	if (mysqli_query($conn,$insertar)){
		echo "Nuevo registro creado";
	}else{
		echo "Error al crear el registro";
	}
	}
	if($_POST[actualiza]){
	if (mysqli_query($conn,$actualizar)){
		echo "Registro actualizado";
	}else{
		echo "Error al actualizar el registro.";
	}
	}
	if($_POST[borra]){
		if(mysqli_query($conn,$eliminar)){
			echo "Registro eliminado: $id";
		}else{
			echo "Error al eliminar registro".$conn->error;
		}
	}
	mysql_close($conn);
?>