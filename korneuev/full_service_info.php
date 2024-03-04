<?php include "header.php"; ?>
<?php
// Подключение к базе данных
$servername = "localhost";
$username = "zoxan";
$password = "123";
$dbname = "textovarorg";

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Проверка наличия параметра id в URL
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // SQL запрос для получения информации о выбранной услуге
        $stmt = $db->prepare("SELECT * FROM Services WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $service = $stmt->fetch(PDO::FETCH_ASSOC);

        // Вывод полной информации о выбранной услуге
        echo '<div class="container mt-5">';
        echo '<div class="row">';
        echo '<div class="col-md-6">';
        echo '<h2>' . $service['name'] . '</h2>';
        echo '<img src="' . $service['image'] . '" class="card-img" alt="Alt текст" style="max-width: 100%;">';
        echo '<p>' . $service['description'] . '</p>';
        echo '<p>' . $service['bigdescription'] . '</p>';
        echo '<p>Цена: ' . $service['price'] . '</p>';
        // Дополнительные детали о выбранной услуге, если они есть
        echo '</div>';
        echo '<div class="col-md-6">';
        echo '<h2>Оформление заказа</h2>';
        echo '<form action="makeservice_order.php" method="post">';
        echo '<input type="hidden" name="service_id" value="' . $service['id'] . '">';
        echo '<div class="form-group">';
        echo '<label for="username">Имя пользователя:</label>';
        echo '<input type="text" class="form-control" id="name" name="name" placeholder="Введите имя зарегистрированного пользователя" required>';
        echo '</div>';
        echo '<button type="submit" class="btn btn-success btn-lg">Отправить заказ</button>';
        echo '</form>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    } else {
        // Если параметр id отсутствует, выводим сообщение об ошибке
        echo '<p class="text-danger">Ошибка: Не передан ID услуги.</p>';
    }
} catch (PDOException $e) {
    echo '<p class="text-danger">Ошибка получения данных: ' . $e->getMessage() . '</p>';
}

?>
