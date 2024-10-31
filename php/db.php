<?php  
 
$servername = "localhost"; 
$username = "root"; 
$password = "root"; 
$dbname = "food"; 
 
$conn = mysqli_connect($servername, $username, $password, $dbname); 
 
if(!$conn){ 
    die("Connection Failed". mysqli_connect_error()); 
} else { 
   "Успешно"; 
} 

?>