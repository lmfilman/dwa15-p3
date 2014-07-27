@extends('_master')

@section('title')
  P3 - Lorem Ipsum Generator
@stop

@section('content')
  <div class="container">
      <div class="starter-template">
        <h1>Lorem Ipsum Generator</h1>
        <form method="POST" id="lorem_ipsum_form">
			<div>
				Number of paragraphs (1 - 20): <input type="text" name="num_paragraphs" value=<?php echo "'" . $num_paragraphs . "'";?>>
				<?php 
				if ($num_paragraphs_error){
					echo "<br><span class='label label-danger'>" . "Please enter a number from 1 to 20." . "</span>";
				}
				?>
			</div>
			<br>
			<div >
				Size of paragraphs: 
				<select name="paragraph_size" form="lorem_ipsum_form">
					<option value="mixed" 	<?php if ($paragraph_size ==  "mixed") echo "selected"?>	>Mixed</option>
	  				<option value="small" 	<?php if ($paragraph_size ==  "small") echo "selected"?>	>Small</option>
	  				<option value="medium" 	<?php if ($paragraph_size ==  "medium") echo "selected"?>	>Medium</option>
	  				<option value="large"	<?php if ($paragraph_size ==  "large") echo "selected"?>	>Large</option>	
				</select>
			</div>
			<br>
			<div>
				Start with Lorem Ipsum: <input type="checkbox" name="start_with_lorem_ipsum" <?php if ($start_with_lorem_ipsum) {echo "checked";} ?>>
			</div>
			<br>
			<input type="submit">
		</form>
		<br>
		
		<div class='text-left'>
			<?php echo $lorem_ipsum_text; ?>
		</div>
      </div>
    </div>
@stop