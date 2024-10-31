<?php 
 require_once('db.php'); 
 $fio = $_POST['fio'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $password = $_POST['password']; 
 $repeatpassword = $_POST['repeatpassword'];
 
if ($password != $repeatpassword) { 
    echo "Пароли не совпадают"; 
} else { 
    $passw=password_hash($password, PASSWORD_BCRYPT);
    $sql = "INSERT INTO users (fio, phone, email, password) VALUES ('$fio', '$phone', '$email', '$passw')"; 
    if ($conn -> query($sql) === TRUE) { 
        echo "Успешная регистрация"; 
    } 
    else { 
        echo "Ошибка: " . $conn->error; 
    } 
     
} 
 
?>