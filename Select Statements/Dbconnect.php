<?php 
$servername = "localhost"; 
$user = "root" ; 
$password = "" ; 
$DATABASE_NAME = "campus" ; 

//create connection 
$con = new mysqli( $servername, $user, $password, $DATABASE_NAME) ; 

//check if connection is working 
if ($con -> connect_error ){ 
echo mysql_fatal_error(); 
} 
else{ 
echo "connection successful" ; 
} 
function mysql_fatal_error(){ 

echo <<< _END 
We are sorry it was impossible to complete the requested task. The error we got was : 
<p>Fatal Error</p>. 
Please click the back button on your browser and try again. incase you still have problems,please <a 
href="mailto:rennishm@gmail.com"> email our administrator.</a> 
Thank you 
_END; 
} 
?> 
