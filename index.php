<?php
require("init.php");
if(isset($_POST['submit']))
{
$dbobject->email=	trim($_POST['email']);
$dbobject->name=	trim($_POST['name']);
$dbobject->pwd=	trim($_POST['pwd']);
$dbobject->create(trim($_POST['name']),trim($_POST['pwd']));
$dbobject->redirect("index.php");
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
<td><input type="text" name="email" placeholder="Email"    /> </td>
</tr>   
<tr>
<td><br/> <br/> Password : </td>
<td><input type="password" name="pwd" placeholder="Password"    /> </td>
</tr>
<tr>
<td><input type="submit" name="submit" value="submit"    /> </td>
</tr>

<table>

</form>
</body>
</html>
