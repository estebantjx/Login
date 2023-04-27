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

		<label for="contraseña">Contraseña:</label>
		<input type="password" id="contraseña" name="contraseña"><br>

		<input type="submit" value="Login">
	</form>
    <?php
session_start();

if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {

	$username = $_POST['usuario'];
	$password = $_POST['contraseña'];

	if ($username === 'esteban' && $password === '123') {
		$_SESSION['usuario'] = $username;
		header('Location: index.php');
		exit();
	} else {
		print 'Contraseña o usuario incorrectos';
	}
}

?>
</body>
</html>