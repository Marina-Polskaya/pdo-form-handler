<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Вход</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="wrapper">
		<form method="POST" action="/pdo-form-handler/form-handler.php">
			<div class="top">
				<h3>Авторизация</h3>
			</div>
			<div class="labelBox">
				<label for="login">Логин
					<input type="text" name="login" id="login" placeholder="Введите логин"/>
				</label>
			</div>
			<div class="labelBox">
				<label for="password">Пароль
					<input type="password" name="password" id="password" placeholder="Введите пароль"/>
				</label>
			</div>
			<div class="button">
				<button type="submit" name="submit">Войти</button>
			</div>
		</form>
	</div>
	
</body>
</html>
