<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HOMEPAGE</title>
</head>
<body>
	<div>
		<a href='/'>Return home</a>
		<h1>Random User</h1>
		<form method="POST">
			Title: <input type="text" name="title">
			<input type="submit">
		</form>
		<?php 
			echo $user->get_name();
		?>

	</div>
</body>
</html>