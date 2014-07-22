@extends('_master')

@section('title')
  P3 - Random User Generator
@stop

@section('content')
  <div class="container">
      <div class="starter-template">
        <h1>Random User Generator</h1>
        <form method="POST">
        	<br>
			Number of users (1 - 20): <input type="text" name="num_users" value = <?php echo '"' . $num_users . '"';?>>
			
			<br>
			Include birthday? <input type="checkbox" name="include_birthday" <?php if ($include_birthday) {echo "checked";} ?>>
			
			<br>
			Include location? <input type="checkbox" name="include_location" <?php if ($include_location) {echo "checked";} ?>>
			
			<br>
			Include profile? <input type="checkbox" name="include_profile" <?php if ($include_profile) {echo "checked";} ?>>
			
			<br>
			<input type="submit">
		</form>

		<br>
		<?php 
			if ($num_users_error){
				echo 'ERROR<br>';
			}
			foreach ($users as $user){
				echo '<div>';
				echo $user->get_name() . '<br>';
				if ($include_birthday){
					echo $user->get_birthday() . '<br>';
				}
				if ($include_location){
					echo $user->get_location() . '<br>';
				}
				if ($include_profile){
					echo $user->get_profile();
				}
				echo '</div>';
			}
		?>
      </div>
    </div>
@stop
