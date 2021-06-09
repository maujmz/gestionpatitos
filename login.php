<!DICTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="CSS/estilos login.css">
<?php
session_start();
?>
</head>

<body>

<form method="post" action="http://localhost/Patitos/validar.php" name="login">
<div class="Iniciosesion">
<label>Usuario</label>
<input type="text" name="usuario" required/><br><br>
<label>Contraseña</label>
<input type="password" name="password" required/><br><br>
</div>
<div class="sesionbtn">
<button type="submit" name="register">Iniciar Sesion</button>
</form>
</body>
</html>