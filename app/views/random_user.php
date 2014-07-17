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
			Include birthday? <input type="checkbox" name="include_birthday">
			Include location? <input type="checkbox" name="include_location">
			Include profile? <input type="checkbox" name="include_profile">
			<input type="submit">
		</form>

		<?php 
			if ($num_users_error){
				echo 'ERROR<br>';
			}
			foreach ($users as $user){
				echo $user->get_name() . '<br>';
				if ($include_birthday){
					echo $user->get_birthday() . '<br>';
				}
				if ($include_location){
					echo $user->get_location() . '<br>';
				}
				if ($include_profile){
					echo 'PROFILE_HERE<br>';//$user->get_profile(). '<br>';
				}
				echo '<br>';
			}
		?>

	</div>
</body>
</html>