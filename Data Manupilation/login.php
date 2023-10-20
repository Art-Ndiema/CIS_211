<?php 
//contains code showing how our login system will work session_start(); 
include "dbconnect.php" ; 
$uname = $_REQUEST['uname']; 
$pwd = $_REQUEST['pwd']; 
//confirming our variables are not empty 
if(empty($uname)){ 
header("Location : index.php?error = User Name is required!") ; 
exit(); 
} 
else if(empty($pwd)){ 
header("Location : index.php?error = Fill in your password. ") ; 
exit(); 
} 
