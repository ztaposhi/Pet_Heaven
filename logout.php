<?php 
require'db.php';
   unset($_SESSION['USER_LOGIN']);
  
  header('location:index.php') ;
  die();

?>