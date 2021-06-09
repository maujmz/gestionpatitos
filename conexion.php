<?php
	//Variables para la conexión
	$id = $_POST["idconsultar"];
	$usuario = "root";
	$pass = "password";
	$server = "localhost";
	$db = "patitos";
	//Se crea la conexión o se manda un error si no se conecta
	$conn = mysqli_connect($server,$usuario,$pass,$db) or die ("Error de conexión");
	$consulta = "SELECT * FROM inventario WHERE idProducto = $id";
	//Se manda la consulta con la variable de conexión
	$resultado = mysqli_query($conn,$consulta);
	//Se imprime la tabla
	echo '<table border="1">';
	echo '<tr>';
	echo '<th id="id">ID</th>';
	echo '<th id="nombre">Nombre</th>';
	echo '<th id="prov">Proveedor</th>';
	echo '<th id="cant">Cantidad</th>';
	echo '<th id="costo">Costo</th>';
	echo '<th id="fecha">Fecha de Entrada</th>';
	echo '</tr>';
	if($resultado){
	//Se llena la tabla con los registros obtenidos
		while($row = $resultado->fetch_array()){
			echo '<tr>';
			echo '<td>'.$row['idProducto'].'</td>';
			echo '<td>'.$row['nombreProducto'].'</td>';
			echo '<td>'.$row['proveedorProducto'].'</td>';
			echo '<td>'.$row['cantidadProducto'].'</td>';
			echo '<td>'.$row['costoProducto'].'</td>';
			echo '<td>'.$row['fechaEntrada'].'</td>';
		}
	}	
?>