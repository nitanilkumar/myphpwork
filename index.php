<?php
require("init.php");
if(isset($_POST['submit']))
{
	$dbobject->email=trim($_POST['email']);
	$dbobject->name=trim($_POST['name']);
	$dbobject->pwd=	trim($_POST['pwd']);
	$dbobject->create();
	$dbobject->page="index.php";
	$dbobject->redirect();
}

else if(isset($_POST['Login']))
{
	$dbobject->email=trim($_POST['email']);
	$dbobject->pwd=	trim($_POST['pwd']);
	if($dbobject->auth()==1)
	{
			$dbobject->redirect("home.php");
			$dbobject->redirect();
	}
	else
	{
		$dbobject->redirect("index.php");
		$dbobject->redirect();
	}
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reg Form</title>
</head>
<body>
<form method="post">


<table>
<tr>
<td> Name : </td>
<td><input type="text" name="name" placeholder="Name"    /> </td>
</tr> .

<tr>
<td> <br/> <br/>Email : </td>
<td><br/> <br/><input type="text" name="email" placeholder="Email"    /> </td>
</tr>   
<tr>
<td><br/> <br/> Password : </td>
<td><br/> <br/><input type="password" name="pwd" placeholder="Password"    /> </td>
</tr>
<tr> 
<td><input type="submit" name="submit" /> </td>

</tr>

</table>
</form>
<hr>
<form method="post">
<table>
<tr>
<td> <br/> <br/>Email : </td>
<td><br/> <br/><input type="text" name="email" placeholder="Email"    /> </td>
</tr>   
<tr>
<td><br/> <br/> Password : </td>
<td><br/> <br/><input type="password" name="pwd" placeholder="Password"    /> </td>
</tr>
<tr>
<td><input type="submit" name="Login"     /> </td>
</tr>

</table>

</form>
</body>
</html>
