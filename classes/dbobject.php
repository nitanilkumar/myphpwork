<?php
class dbobject
{
 
  public $email; public $name; public $pwd;
  function create()
  {
	  global $database;
	  return $database->query("INSERT INTO `reg`(`email`, `name`, `pwd`) VALUES ('".$this->email."','".$this->name."','".$this->pwd."')");
	  
	  
  }
  
  function redirect()
  {
	         echo"<script>location.href='".$page."';</script>";
  }
  
}

$dbobject=new dbobject();


?>