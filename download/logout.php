<?php
	session_start();
	
?>

<!DOCTYPE html>
<html>
<body>

<?php
    session_unset();
    session_destroy();
	unset($_SESSION['username']);
	$_SESSION['message'] = "You are now logged out";
	header("location: http://localhost/new/project.php");
?>

</body>
</html>