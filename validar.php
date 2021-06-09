<?php
	session_start();
	$usuario=$_POST['usuario'];
	$password=$_POST['password'];
	
	$_SESSION['usuario'] = '$usuario';
	
	$conexion=mysqli_connect("localhost", "root", "password", "patitos");
	$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and password='$password'";
	$resultado=mysqli_query($conexion,$consulta);
	
	$filas=mysqli_num_rows($resultado);
	if ($filas>0) {
		header("location:index2.html");
	} else {
		echo "Error de autentificación";
	}
	mysqli_free_result($resultado);
	mysqli_close($conexion);
?>