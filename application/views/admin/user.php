<!-- Sidebar -->
<?php include Kohana::find_file('views', 'admin/setsidebar'); ?>
<!--end-->

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Add User</h1>
    <div class="row">
	<div class="col-xs-6 col-md-4">
	    <?php if (!empty($message)): ?>
	    <div class="alert alert-warning alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?= $message; ?>
		<?= print_r($errors, TRUE); ?>
	    </div>
	    <?php endif; ?>
	    <?php echo Form::open('setting/create'); ?>
		<div class="form-group">
		    <?php echo Form::label('username', 'Username: '); ?>
		    <?php echo Form::input('username', $username, array('placeholder' => 'Username', 'type' => 'text', 'class' => 'form-control', 'id' => 'username')); ?>
		</div>
		<div class="form-group">
		    <?php echo Form::label('email', 'Email Address: '); ?>
		    <?php echo Form::input('email', $email, array('placeholder' => 'Email address', 'type' => 'text', 'class' => 'form-control', 'id' => 'email')); ?>
		</div>
		<div class="form-group">
		    <?php echo Form::label('password', 'Password: '); ?>
		    <?php echo Form::input('password', '', array('placeholder' => 'Password min 8 character', 'type'=>'password', 'class' => 'form-control', 'id' => 'password')); ?>
		</div>
		<div class="form-group">
		    <?php echo Form::label('password_confirm', 'Confirm Password: '); ?>
		    <?php echo Form::input('password_confirm', '', array('placeholder' => 'Confirm password', 'type'=>'password', 'class' => 'form-control', 'id' => 'password_confirm')); ?>
		</div>
		<?php echo Form::submit('create', 'Create User', array('class' => 'btn btn-primary')); ?>
	    <?php echo Form::close(); ?>
	</div>
	
    </div>
</div>
