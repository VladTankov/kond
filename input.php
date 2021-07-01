<?php 
	session_start();
	if ($_SESSION['user']) {
		header('Location: ../index.html');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Сладкоежка</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="assets/img/headlogo.png">
	<link rel="stylesheet" href="assets/style/input.css">
</head>
<body>
	<form class="form" action="vendor/signin.php" method="post">
		<h1 class="form-h1">ВХОД</h1>
			<label for="">Логин</label>
			<input type="text" name="login" placeholder="Введите логин">
			<label for="">Пароль</label>
			<input type="password" name="password" placeholder="Введите пароль">
		<button class="button" type="submit">Войти</button>
		<p>У вас нет аккаунта? - <a href="/registr.php">зарегистрируйтесь</a></p>
		<?php
			if ($_SESSION['message']) {
				echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
			}
			unset($_SESSION['message']); 
		?>
	</form>
</body>
</html>