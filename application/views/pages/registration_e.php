<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3 class="page-header">Update Profile</h3>

<?php echo form_open('register/update_user/'.$user->userId); ?>
	    <div class="content">
	        <div class="row">
	            <div class="col-sm-6">
	            <input type="hidden" name="userId" value="<?php echo $user->userId; ?>">
	                <div class="form-group">
	                    <label for="firstname">Firstname</label>
	                    <input type="text" class="form-control" id="firstname" name="firstName" value="<?php echo set_value('firstName', $user->firstName) ?>">
	                </div>
	            </div>
	            <div class="col-sm-6">
	                <div class="form-group">
	                    <label for="lastname">Lastname</label>
	                    <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo set_value('lastName', $user->lastName); ?>" >
	                </div>
	            </div>
	               <div class="col-sm-6">
	                <div class="form-group">
	                    <label for="lastname">username</label>
	                    <input type="text" class="form-control" id="userName" name="userName" value="<?php echo set_value('userName', $user->userName); ?>" >
	                </div>
	            </div>
	                <div class="col-sm-6">
	                <div class="form-group">
	                    <label for="lastname">password</label>
	                    <input type="text" class="form-control" id="password" name="password" value="<?php echo set_value('password', $user->password); ?>" >
	                </div>
	            </div>
	            	  <input type="submit" class="btn btn-primary">
	        </div>
	        <!-- /.row -->


	        <div class="row">
	
	<?php echo form_close(); ?>
		</div>
	</div>
</div>



