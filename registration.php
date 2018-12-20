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
			if(isset($_POST['reg']))
			{
				if($password==$cpassword)
				{
			    $username=$_POST['username'];
				$contact=$_POST['contact'];
				$email=$_POST['email'];
				$password=$_POST['password'];
				$cpassword=$_POST['cpassword'];
				$gender=$_POST['gender'];
				$country=$_POST['country'];
					
						
					
					$query="select * from user where email='$email'";
					
					$query_run=mysqli_query($conn,$query);
					
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					if($row['email']==$email)
					{
						echo "email already exist";
						
					}
					else
					{
						$sql="INSERT INTO user(username,contact,email,password_1,password_2,gender,country) VALUES ('$username','$contact','$email','$password','$cpassword','$gender','$country')";
						
								if(mysqli_query($conn,$sql))
								{

									echo "done";
									header( "Location: login.php");
								}
						
						
						
						
					}
					
					
					
				
				
			}
			else
				{
					echo "password no match";
					
				}
			
			
			}




?>
	

<!DOCTYPE html>
<html>
<head>
	<title>Registration system</title>
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
</header>

	<div class="header">
		<h2>Register</h2>
	</div>
	<form method="post" action="">
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="" required pattern="^[a-zA-Z''-'\s]{1,40}$">
		</div>
		<div class="input-group">
			<label>Contact Number</label>
			<input type="text" name="contact" value="" required pattern="^(?:\+?88)?01[15-9]\d{8}$">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="cpassword">
		</div>
		<div>
			<label>Gender</label>
		<select class="select-field" name="gender">
		<option>---Select gender---</option>
        <option>Male</option>
        <option>Famale</option>
        <option>Other</option>
		</select>
		</div>
		
		<div>
			<label>Country</label>
		<select class="select-field" name="country">
		<option>---Select country---</option>
        <option>Afghanistan</option>
        <option>Argentina</option>
        <option>Australia</option>
		<option>Bangladesh</option>
		<option>Brazil</option>
		<option>Canada</option>
		<option>China</option>
		<option>India</option>
		<option>Iran</option>
		<option>Pakistan</option>
		</select>
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg">Register</button>
		</div>
		
	</form>
	div>
<br/><br/><footer>Copyright &copy; yoursite.com</footer>
</div>

</body>
</html>