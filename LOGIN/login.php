<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Login</h1>
	<form action="login.php" method="post">
		<label for="usuario">Usuario:</label>
		<input type="text" id="usuario" name="usuario"><br>

		<label for="contraseña">Password:</label>
		<input type="contraseña" id="contraseña" name="contraseña"><br>

		<input type="submit" value="Login">
	</form>
    <?php
session_start();

if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {
	// Recuperar los datos de inicio de sesión del formulario
	$username = $_POST['usuario'];
	$password = $_POST['contraseña'];

	// Validar los datos de inicio de sesión
	if ($username === 'esteban' && $password === '123') {
		// Iniciar sesión y redirigir al usuario a la página de destino
		$_SESSION['usuario'] = $username;
		header('Location: index.php');
		exit();
	} else {
		// Mostrar un mensaje de error al usuario
		$error_message = 'La contraseña o el correo son invalidos';
	}
}

?>
</body>
</html>