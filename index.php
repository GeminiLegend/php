<?php require('lib/config.php');
use Illuminate\Database\Capsule\Manager as Capsule;

$users = Capsule::table('users')->get();
!ddd($users);
/*
	1.fetch all users using eloquent from database
	2. recreate all of the forms 
	3. all sql should be done using eloquent
	packagist.org illuminate/eloquent
*/