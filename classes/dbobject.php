<?php
class dbobject
{
 
  public $email; public $name; public $pwd; public $stmt; public $page;
  function create()
  {
	  global $database;
	  return $database->query("INSERT INTO `reg`(`email`, `name`, `pwd`) VALUES ('".$this->email."','".$this->name."','".$this->pwd."')");
	    
  }
  
  function redirect()
  {
	         echo"<script>location.href='".$this->page."';</script>";
  }
  
  function auth()
  {
	  global $database;
	  $this->stmt=$database->query("SELECT * FROM `reg` WHERE `email`='".$this->email ."'  and  `pwd`= '".$this->pwd ."' ");
		return $database->count();
  }
  
 
}

$dbobject=new dbobject();


?>