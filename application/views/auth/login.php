<div class="container"> 
    <?php echo Form::open('auth/login', array('class' => 'form-signin')); ?>
	<h2 class="form-signin-heading">Login</h2>
	
	<?php echo Form::label('inputEmail', 'Username', array('class' => 'sr-only')); ?>
	<?php echo Form::input('username', '', array('placeholder' => 'username', 'type' => 'username', 'class' => 'form-control', 'id' => 'inputEmail')); ?>
	<?php echo Form::label('inputPassword', 'Password', array('class' => 'sr-only')); ?>
	<?php echo Form::input('password', '', array('placeholder' => 'password', 'type'=>'password', 'class' => 'form-control', 'id' => 'inputPassword')); ?>
	<div class="checkbox">
	    <label><?php echo Form::checkbox('remember', 1, TRUE); ?> Remember me</label>
	</div>
	<?php if ($message) : ?>
	    <div class="alert alert-warning alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	    <?php echo $message; ?>
	    </div>
	<?php endif; ?>  
	<?php echo Form::submit('login', 'Login', array('class' => 'btn btn-lg btn-primary btn-block')); ?>
    <?php echo Form::close(); ?>
</div> <!-- /container -->
