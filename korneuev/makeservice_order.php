<?php
// Подключение к базе данных
$servername = "localhost";
$username = "zoxan";
$password = "123";
$dbname = "textovarorg";

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Получение данных из формы заказа
    $name = isset($_POST['name']) ? $_POST['name'] : null; // Проверяем, было ли отправлено поле 'name' в форме
    $service_id = isset($_POST['service_id']) ? $_POST['service_id'] : null; // Проверяем, было ли отправлено поле 'service_id' в форме

    if ($name && $service_id) { // Проверяем, что оба поля были отправлены
        // Поиск user_id по имени пользователя
        $stmt = $db->prepare("SELECT id FROM users WHERE name = :name");
        $stmt->bindParam(':name', $name);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Получение цены услуги
        $stmt = $db->prepare("SELECT price FROM services WHERE id = :service_id");
        $stmt->bindParam(':service_id', $service_id);
        $stmt->execute();
        $service = $stmt->fetch(PDO::FETCH_ASSOC);
        $total_price = $service['price'];

        if ($user) {
            $user_id = $user['id'];

            // Получение текущей даты и времени
            $order_date = date("Y-m-d H:i:s");

            // SQL запрос для вставки данных заказа в таблицу serviceorders
            $stmt = $db->prepare("INSERT INTO serviceorders (user_id, service_id, order_date, total_price) VALUES (:user_id, :service_id, :order_date, :total_price)");
            $stmt->bindParam(':user_id', $user_id);
            $stmt->bindParam(':service_id', $service_id);
            $stmt->bindParam(':order_date', $order_date);
            $stmt->bindParam(':total_price', $total_price);
            $stmt->execute();

            // Вывод сообщения об успешном оформлении заказа
            echo "Спасибо, $name, ваш заказ на услугу с идентификатором $service_id принят!";
        } else {
            echo "Пользователь с именем $name не найден.";
        }
    } else {
        echo "Не все необходимые данные были отправлены.";
    }

} catch(PDOException $e) {
    echo "Ошибка при оформлении заказа: " . $e->getMessage();
}
?>
