<?php  
require_once('db.php'); 
 
$fio = $_POST['fio']; 
$password = $_POST['password']; 
 
$sql = "SELECT * FROM Users WHERE fio = '$fio'"; 
$result = $conn->query($sql); 
 
if ($result->num_rows > 0) { 
    $user=$result->fetch_assoc(); 
    if (password_verify($password,$user['password'])){ 
        //Создание сессии и переменных сессии: 
                session_start(); 
                $_SESSION['auth']=true; 
                $_SESSION['fio']= $user['fio']; 
               // Header("Location:index.php"); 
               echo "Добро пожаловать, " . $user['fio'] . "!"; 
 
    
} 
} else { 
    echo "Нет такого пользователя"; 
} 
 
?>