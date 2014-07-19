<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HOMEPAGE</title>
</head>
<body>
	<div>
		<a href='/'>Return home</a>
		<h1>Lorem Ipsum</h1>
		<form method="POST">
			Number of paragraphs (1 - 20): <input type="text" name="num_paragraphs" value=<?php echo "'" . $num_paragraphs . "'";?>>
			<input type="submit">
		</form>

		<?php 
			if ($num_paragraphs_error){
				echo 'ERROR<br>';
			}

			echo $lorem_ipsum_text; ?>
	</div>
</body>
</html>