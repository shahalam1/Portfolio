<?php
ini_set('mysqli.connect_timeout',300);
ini_set('default_socket_timeout',300);
?>
<html>
<head>
<style>
body{

 margin-left: 78px;
 margin-right: 50px;
	}
	header{
	background-color: #9999ff;
	margin-right:10px;
	height:60px;
}
footer{
    padding: 1em;
    color: white;
    background-color: #009999;
    clear:	left;
	text-align:center;
	margin-right:10px;
}
</style>
</head>
<body>
	<header>
		<div>
<p style="float:right;margin-right:90px;">
<a href="download"> <button class="download"><b>Images Download</b></button></a>
</p>
</div>
	<div class="branding">
			<h1 style="margin-left:10px">Images Gallery</h1>	
		</div>
</header>
<form method="post" enctype="multipart/form-data">
<br/>
<input type="file" name="image" />
<br/><br/>
<input type="submit" name="sumit" value="Upload" />
</form>
<?php
if(isset($_POST['sumit']))
{
	if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
	{
		echo "please select an image.";
	}
	else
	{
		
		$image=addslashes($_FILES['image']['tmp_name']);
		$name=addslashes($_FILES['image']['name']);
		$image=file_get_contents($image);
		$image=base64_encode($image);
		saveimage($name,$image);
		
	}	
}
displayimage();
function saveimage($name,$image)
{
	$servername = "localhost";
$username = "root";
$password = "";
$dbname="kstark";

$con =mysqli_connect($servername, $username, $password, $dbname);
	$qry="insert into images (name,image) values('$name','$image')";
	$result=mysqli_query($con,$qry);
	if($result)
	{
		echo "<br/>image uploaded";
	}
	else
	{
		echo "<br/> image not uploaded";
	}
}
function displayimage()
{
		$servername = "localhost";
$username = "root";
$password = "";
$dbname="kstark";

$con =mysqli_connect($servername, $username, $password, $dbname);
	$qry1="select * from images";
	$result=mysqli_query($con,$qry1);
	while($row = mysqli_fetch_array($result))
	{
				$img1='<img height="250" width="300" src="data:image;base64, '.$row[2].'"> ';
		
	  echo $img1." ";
	}
	mysqli_close($con);
}	
?>
<div>
<br/><br/><footer>Copyright &copy; yoursite.com</footer>
</div>
</body>
</html>