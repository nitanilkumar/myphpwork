<?php
class session
{
   function __construct()
   {
    session_start();
   }
   function createLoginDetails()
   {
    global $dbobject;
    
    $_SESSION['loginDetails']=$dbobject->loginDetails;
   } 
    
    
}
$session=new session();

?>