@extends('_master')

@section('title')
  P3 - Random User Generator
@stop

@section('content')
  <div class="container">
      <div class="starter-template">
        <h1>Random User Generator</h1>
        <form method="POST">
			Number of users (1 - 20): <input type="text" name="num_users" value = <?php echo '"' . $num_users . '"';?>>
			Include birthday? <input type="checkbox" name="include_birthday" <?php if ($include_birthday) {echo "checked";} ?>>
			Include location? <input type="checkbox" name="include_location" <?php if ($include_location) {echo "checked";} ?>>
			Include profile? <input type="checkbox" name="include_profile" <?php if ($include_profile) {echo "checked";} ?>>
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
					echo $user->get_profile();
				}
			}
		?>
      </div>
    </div>
@stop
