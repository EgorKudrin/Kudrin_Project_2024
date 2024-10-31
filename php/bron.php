<?php
require_once('db.php'); // Файл с настройками подключения к базе данных

// Получаем данные из формы
$name = $_POST['name'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$time = $_POST['time'];
$guests = $_POST['guests'];

// Подготавливаем запрос 
$sql = "INSERT INTO bron (name, lname, email, phone, date, time, guests) VALUES ('$name', '$lname', '$email', '$phone', '$date', '$time', '$guests')";

// Выполняем запрос
if ($conn->query($sql) === TRUE) {
    // Вставка прошла успешно
    echo "Бронирование успешно добавлено!";
} else {
    // Ошибка при выполнении запроса
    echo "Ошибка при добавлении бронирования: " . $conn->error;
}

$conn->close(); // Закрываем соединение с базой данных
?>