<?php
use Illuminate\Database\Capsule\Manager as Capsule; 
use Illuminate\Hashing\BcryptHasher as BcryptHasher;

if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$hashedPassword = crypt($_POST['password'], 'salt');

	$usersQuery = Capsule::table('users')->where(function($query) use ($username, $hashedPassword){
		$query 	->where('username', $username)
				->where('password', $hashedPassword);
	});
	$user 		= $usersQuery->first();
	
	if($usersQuery->count() == 0) {
		$_SESSION = [];
	} else {
		$_SESSION['username'] = $user->username;
	    $_SESSION['auth'] = true;
	    header('Location: private.php');
	}
}