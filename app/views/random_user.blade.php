@extends('_master')

@section('title')
  P3 - Random User Generator
@stop

@section('content')
  <div class="container">
      <div class="starter-template">
        <h1>Random User Generator</h1>
        <form method="POST">
        	<div>
        		Number of users (1 - 20): <input type="text" name="num_users" value = <?php echo '"' . $num_users . '"';?>>
				<?php 
				if ($num_users_error){
					echo "<br><span class='label label-danger'>" . "Please enter a number from 1 to 20." . "</span>";
				}
				?>
        	</div>
        	<div>
				Include birthday? <input type="checkbox" name="include_birthday" <?php if ($include_birthday) {echo "checked";} ?>>
			</div>
			<div>
				Include location? <input type="checkbox" name="include_location" <?php if ($include_location) {echo "checked";} ?>>
			</div>
			<div>
				Include profile? <input type="checkbox" name="include_profile" <?php if ($include_profile) {echo "checked";} ?>>
			</div>
			<br>
			<input type="submit">
		</form>

		<br>
		<div>
			<?php 
				foreach ($users as $user){
					echo '<div class="panel panel-default">';
						
						//User name
						echo '<div class="panel-heading">';
							echo '<h3 class="panel-title">';
								echo $user->get_name() . '<br>';
							echo '</h3>';
						echo '</div>';

						//User fields
						echo '<div class="panel-body">';
							if ($include_birthday){
								echo "Birthday: " . $user->get_birthday() . '<br>';
							}
							if ($include_location){
								echo "Location: " . $user->get_location() . '<br>';
							}
							if ($include_profile){
								echo '<br><div class="text-left">';
								echo $user->get_profile();
								echo '</div>';
							}
						echo '</div>';
					echo '</div>';
				}
			?>
		</div>
      </div>
    </div>
@stop
