<?php
use Illuminate\Database\Capsule\Manager as Capsule;
if(isset($_POST['register'])){
	
	
	$username 	= $_POST['username'];
	$password 	= crypt($_POST['password'], 'salt');
	$email 		= $_POST['email'];

	// $query = Capsule::table('users')->insert( 'username', 'password', 'email')
	$users = Capsule::table('users');
	$username = $users->insert(array('username' => $username, 'password' => $password, 'email' => $email));

}