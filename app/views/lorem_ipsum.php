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
				<option value="mixed" 	<?php if ($paragraph_size ==  "mixed") echo "selected"?>	>Mixed</option>
  				<option value="small" 	<?php if ($paragraph_size ==  "small") echo "selected"?>	>Small</option>
  				<option value="medium" 	<?php if ($paragraph_size ==  "medium") echo "selected"?>	>Medium</option>
  				<option value="large"	<?php if ($paragraph_size ==  "large") echo "selected"?>	>Large</option>	
			</select>
			Start with Lorem Ipsum: <input type="checkbox" name="start_with_lorem_ipsum" <?php if ($start_with_lorem_ipsum) {echo "checked";} ?>>
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