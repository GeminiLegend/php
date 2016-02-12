<?php require_once('lib/config.php');
// if 'auth' exists in $_SESSION return true
// note: $_SESSION auth and username only exist if the query is 
// successful which only happens if the username and pass match.
// $auth is set to $_SESSION['auth']
// $username is set to $_SESSION['username']
if(array_key_exists('auth', $_SESSION)){
	$auth 		= (string) $_SESSION['auth'];
	$username 	= $_SESSION['username'];
	echo "welcome to the matrix, Mr Anderson.";
} else/* if the query was unsuccessful auth is false */ {
	$auth = 'false';
}
?>

<?php require('header.php'); ?>
	<!-- echo's out if user is authed -->
	<script type="text/javascript">
		var auth = <?php echo $auth; ?>;
	</script>
<?php require('footer.php'); ?>