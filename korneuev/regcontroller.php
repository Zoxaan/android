<?php
$servername = "localhost";
$username = "zoxan";
$password = "123";
$dbname = "textovarorg";

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение данных из формы
$name = $_POST['name'];
$mail = $_POST['mail'];
$password = $_POST['password'];
$telephone = $_POST['telephone']; // Получаем значение поля "телефон"

// Хеширование пароля
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Создание запроса с добавлением поля "телефон"
$sql = "INSERT INTO users (name, mail, password, telephone, role)
VALUES ('$name', '$mail', '$hashed_password', '$telephone', 'user')";

if ($conn->query($sql) === TRUE) {
    echo "Новый пользователь успешно создан";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

header('Location: login.php');
$conn->close();
?>