<?php 
 
session_start();
session_destroy();
 
header("Location: website/index_login.php");
 
?>