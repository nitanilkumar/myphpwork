<?php
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'login');

	$q="INSERT INTO insert(user,pass) values('$user',$pass)";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title> Insertion </title>
</head>
<body>
	<h1> Log In</h1>
	<p><?php
	if($status==1)
		{
			echo "Record inserted";
		}
	else
		echo "Inserted Failed";
	?>
	</p>
do you want to insert more record ? <a href="insertForm.php">Click Here </a>
</body>
</html>