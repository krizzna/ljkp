<div class="container">
<h3>Create New User</h3>

 <?php if (!empty($message)): ?>
  <h3><?= $message; ?></h3>
  <pre><?= print_r($errors, TRUE); ?></pre>
 <?php endif; ?>
 
<?php echo Form::open('auth/register'); ?>

<?php echo Form::label('username', 'Desired Username: '); ?>
<?php echo Form::input('username', $username, array('placeholder' => 'username', 'type' => 'text')); ?>
<br />
<?php echo Form::label('email', 'Email Address: '); ?>
<?php echo Form::input('email', $email, array('placeholder' => 'email address', 'type' => 'text')); ?>
<br />
<?php echo Form::label('password', 'Password: '); ?>
<?php echo Form::input('password', '', array('placeholder' => 'password', 'type'=>'password')); ?>
<br />
<?php echo Form::label('password_confirm', 'Confirm Password: '); ?>
<?php echo Form::input('password_confirm', '', array('placeholder' => 'confirm password', 'type'=>'password')); ?>
<br />
<?php echo Form::submit('create', 'Create User'); ?>
<?php echo Form::close(); ?>
<br />
<p>Or <?php echo HTML::anchor('auth/login', 'login'); ?> if you have an account already.</p>
</div>
