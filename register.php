<?php require_once('lib/config.php'); ?>

<?php require('header.php'); ?>

	<p>Please enter your desired username and password</p>
	<form action="" method="post">
		<div>
			<input type="text" name='username' placeholder='Username' value=''>
			<input type="text" name='password' placeholder='Password' value=''>
			<input type="text" name='email' placeholder='Email' value=''>
			<input id='register' type="submit" name='register' value='register'>
		</div>
	</form>

<?php require('footer.php'); ?>

<?php require('lib/register.php');

ob_end_flush();
