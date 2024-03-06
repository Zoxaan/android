<?php
session_start();

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
$mail = $_POST['mail'];
$password = $_POST['password'];

// Создание запроса с подготовленными выражениями
$stmt = $conn->prepare("SELECT * FROM Users WHERE mail = ?");
$stmt->bind_param("s", $mail);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Получаем данные пользователя
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {
        // Сохраняем информацию о пользователе в сессии
        $_SESSION['user'] = $user;

        // Перенаправляем пользователя на главную страницу
    } else {
        echo "Неверный email или пароль";
    }
} else {
    echo "Неверный email или пароль";
}
// Проверяем, совпадает ли введенная пользователем капча с сохраненной в сессии
    if ($_SESSION['captcha_result'] == $_POST['captcha']) {

       header("location:index.php");
    } else {
        $_SESSION['error'] = "капча не пройдена";

        header("location:login.php");

    }

    // Проверяем пароль

$stmt->close();
$conn->close();
?>