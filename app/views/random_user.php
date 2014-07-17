<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HOMEPAGE</title>
</head>
<body>
	<div>
		<a href='/'>Return home</a>
		<h1>Random User Generator</h1>
		<form method="POST">
			Number of users (1 - 20): <input type="text" name="num_users">
			<input type="submit">
		</form>
		<?php 
			foreach ($users as $user){
				echo $user->get_name();
				echo '<br>';
			}
		?>

	</div>
</body>
</html>