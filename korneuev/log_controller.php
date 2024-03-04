

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
$mail = $_POST['mail'];
$password = $_POST['password'];

// Создание запроса
$sql = "SELECT * FROM Users WHERE mail = '$mail' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Вывод результатов
    while($row = $result->fetch_assoc()) {
        echo "Добро пожаловать, " . $row["name"]. "!";
    }
    header('Location: index.php');
} else {
    echo "Неверный email или пароль";
}
$conn->close();
?>