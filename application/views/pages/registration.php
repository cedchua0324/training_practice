<div class="col-lg-4 well">

			<?php echo form_open('register/add_user') ?>

			<label for="registrationHeader" style="font-size:18px;font-weight:bolder;">Account Registration</label>
				<hr />
				<label for="inputFirstName" style="font-weight: bolder;">First Name:</label>
				<input type="text" class="form-control" style="text-align: center;" name='firstName'>
				<label for="inputLastName" style="font-weight: bolder;">Last Name:</label>
				<input type="text" class="form-control" style="text-align: center;" name='lastName'>
				<label for="inputUsername" style="font-weight: bolder;">Username:</label>
				<input type="text" class="form-control" style="text-align: center;" name='userName'>
				<label for="inputPassword" style="font-weight: bolder;">Password:</label>
				<input type="password" class="form-control" style="text-align: center;" name='password'>
				
				<input type="submit" class="btn btn-success pull-right" value="Register Account"/>
			<?php echo form_close(); ?>
		</div>