<?php
class dbobject
{
 
  public $email; public $name; public $pwd; public $stmt;
  function create()
  {
	  global $database;
	  return $database->query("INSERT INTO `reg`(`email`, `name`, `pwd`) VALUES ('".$this->email."','".$this->name."','".$this->pwd."')");
	  
	  
  }
  
  function redirect($page)
  {
	         echo"<script>location.href='".$page."';</script>";
  }
  
  function auth()
  {
	  global $database;$sql="SELECT * FROM `reg` WHERE `email`='".$this->email ."'  and  `pwd`= '".$this->pwd ."' ";
	$this->stmt=$database->query($sql);
	return $database->count();
  }
  
 
}

$dbobject=new dbobject();


?>