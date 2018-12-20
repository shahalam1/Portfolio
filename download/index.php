<!DOCTYPE html>
<html>
<head>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 8px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button1 {
    background-color: white; 
    color: black; 
    border: 0px solid #4CAF50;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}
body{
	margin-left:67px;
}
header{
	background-color: #9999ff;
	margin-right:56px;
	height:60px;
}
footer{
    padding: 1em;
    color: white;
    background-color: #009999;
    clear:	left;
	text-align:center;
	margin-right:56px;
}
</style>
</head>
<body>
<header>
<div>
<p style="float:right;margin-right:90px;">
<a href="logout.php"><button>Logout</button></a>
</p>
</div>
<div class="branding">
			<h1 style="margin-left:10px">Images Gallery</h1>	
		</div>
</header><br/>
<?php
	include('authcode.php');
	echo '<html>
	<head>
		<link type="text/css" rel="stylesheet" href="css/main.css" />
	</head>
	<body>
			<table>
				<tr>
					<td><img src="images/example.jpg" width="300" height="250" /></td>
					<td><img src="images/example2.jpg" width="300" height="250"/></td>
					<td><img src="images/example3.jpg" width="300" height="250"/></td>
					<td><img src="images/example4.jpg" width="300" height="250" /></td>
					
				</tr>
				<tr>
					<td><a href="download.php?file='.urlencode('images/example.jpg').'"><button class="button button1">Download</button></a></td>
					<td><a href="download.php?file='.urlencode('images/example2.jpg').'"><button class="button button1">Download</button></a></td>
					<td><a href="download.php?file='.urlencode('images/example3.jpg').'"><button class="button button1">Download</button></a></td>
					<td><a href="download.php?file='.urlencode('images/example4.jpg').'"><button class="button button1">Download</button></a></td>
					
					</tr>
			<tr>
			        <td><img src="images/example5.jpg" width="300" height="250" /></td>
					<td><img src="images/example6.jpg" width="300"height="250" /></td>
					<td><img src="images/example7.jpg" width="300"height="250" /></td>
					<td><img src="images/example8.jpg" width="300"height="250" /></td>
			</tr>
			<tr>
			        <td><a href="download.php?file='.urlencode('images/example5.jpg').'"><button class="button button1">Download</button></a></td>
					<td><a href="download.php?file='.urlencode('images/example6.jpg').'"><button class="button button1">Download</button></a></td>
					<td><a href="download.php?file='.urlencode('images/example7.jpg').'"><button class="button button1">Download</button></a></td>
					<td><a href="download.php?file='.urlencode('images/example8.jpg').'"><button class="button button1">Download</button></a></td>
			</tr>
			<tr>
			        <td><img src="images/example9.jpg" width="300" height="250" /></td>
					<td><img src="images/example10.jpg" width="300"height="250" /></td>
					<td><img src="images/example11.jpg" width="300"height="250" /></td>
					<td><img src="images/example12.jpg" width="300"height="250" /></td>
			</tr>
			<tr>
			        <td><a href="download.php?file='.urlencode('images/example9.jpg').'"><button class="button button1">Download</button></a></td>
					<td><a href="download.php?file='.urlencode('images/example10.jpg').'"><button class="button button1">Download</button></a></td>
					<td><a href="download.php?file='.urlencode('images/example11.jpg').'"><button class="button button1">Download</button></a></td>
					<td><a href="download.php?file='.urlencode('images/example12.jpg').'"><button class="button button1">Download</button></a></td>
			</tr>
			</table>
		<div>
		</div>';
?>
<div>
<br/><br/><footer>Copyright &copy; yoursite.com</footer>
</div>
</body>
</html>