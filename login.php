<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="reguser";

$conn =mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
	{
		echo "database error";
	}
	
	if(isset($_POST['login']))
			{
				$email=$_POST['email'];
				$password=$_POST['password'];
				$query="select * from user where email='$email' and password_1='$password'";
				$query_run=mysqli_query($conn,$query);
				if($query_run)
				{
					if(empty($_POST['email']) || empty($_POST['password']))
					{
						echo " Please insert your valid email and password";
					}
					else
					{
					
					if(mysqli_num_rows($query_run)>0)
					{
						$row=mysqli_fetch_array($query_run,MYSQLI_ASSOC);
						
					
					
					if($row['email']==$email && $row['password_1']==$password)
					{
						
						
						
				  header( "Location: join.php");
					echo "successfully login";
					}
						
					}
					echo " Email or Password does not match ";
					
					
					
				}
					
			}
			}
			

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login system</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	header{
	background-color: #9999ff;
	margin-right:3px;
	margin-left:3px;
	height:60px;
}
footer{
    padding: 1em;
    color: white;
    background-color: #009999;
    clear:	left;
	text-align:center;
	margin-right:3px;
	margin-left:3px;
}
body{
	 background-image: url("images/bac.png");
}
	</style>
</head>
<body>
<header>
<div class="branding">
			<h1 style="margin-left:30px">Images Gallery</h1>	
		</div>
</header><br/><br/>
	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			
			<button type="submit" class="btn" name="login">Login</button>
			
		</div>
		<p>
			Not yet a member? <a href="registration.php">Sign up</a>
		</p>
	</form>
	<div>
<br/><br/><br/><br/><br/><footer>Copyright &copy; yoursite.com</footer>
</div>
</body>
</html>