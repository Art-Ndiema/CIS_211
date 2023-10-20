<!doctype html> 
<html> 
<head> 
<h1>insert data into our table 
</head> 
 <body> 
<center> 
<?php 

//call your database file into the current file 
require "dbconnect.php"; 

//pick data from the user 
$name = $_REQUEST['name']; 
$admission = $_REQUEST['admission'] ; 
$gender = $_REQUEST['gender']; 
$address = $_REQUEST['address'] ; 
$borrowed = $_REQUEST['borrowed'] ;
$returned = $_REQUEST['returned'] ;
//insert data picked into the table 
$sql = "insert into staff values('$name', '$admission', '$gender', '$address','$borrowed', '$returned')"; 

if($conn -> query($sql) === true) { 
echo " records inserted" ; 
}else { 
echo "error"; 
} 
?> 
</center> 
</body> 
</html> 
