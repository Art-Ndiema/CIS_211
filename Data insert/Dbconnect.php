<?php 
$servername = "localhost"; //name of  server 
$user = "root" ; // the user created on your server while installing xampp/wamp 
$password = "" ; // the password set while installing xampp/wamp. leave it empty like mine if you set no password at installation 
$DATABASE_NAME = "campus" ; //name of the databse created 

//creating connection 
$conn = new mysqli( $servername, $user, $password, $DATABASE_NAME) ; 
?> 
