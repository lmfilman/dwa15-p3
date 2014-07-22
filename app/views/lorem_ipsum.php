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
		<form method="POST" id="lorem_ipsum_form">
			Number of paragraphs (1 - 20): <input type="text" name="num_paragraphs" value=<?php echo "'" . $num_paragraphs . "'";?>>
			Size of paragraphs: 
			<select name="paragraph_size" form="lorem_ipsum_form">
				<option value="mixed">Mixed</option>
  				<option value="small">Small</option>
  				<option value="medium">Medium</option>
  				<option value="large">Large</option>	
			</select>
			<input type="checkbox" name="start_with_lorem_ipsum" <?php if ($start_with_lorem_ipsum) {echo "checked";} ?>>
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