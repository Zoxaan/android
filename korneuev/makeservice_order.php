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
    $telephone = isset($_POST['telephone']) ? $_POST['telephone'] : null; // Проверяем, было ли отправлено поле 'telephone' в форме
    $service_id = isset($_POST['service_id']) ? $_POST['service_id'] : null; // Проверяем, было ли отправлено поле 'service_id' в форме

    if ($telephone && $service_id) { // Проверяем, что оба поля были отправлены
        // Получение цены услуги
        $stmt = $db->prepare("SELECT price FROM services WHERE id = :service_id");
        $stmt->bindParam(':service_id', $service_id);
        $stmt->execute();
        $service = $stmt->fetch(PDO::FETCH_ASSOC);
        $total_price = $service['price'];

        if ($service) {
            // Получение текущей даты и времени
            $order_date = date("Y-m-d H:i:s");

            // SQL запрос для вставки данных заказа в таблицу serviceorders
            $stmt = $db->prepare("INSERT INTO serviceorders (telephone, service_id, order_date, total_price) VALUES (:telephone, :service_id, :order_date, :total_price)");
            $stmt->bindParam(':telephone', $telephone);
            $stmt->bindParam(':service_id', $service_id);
            $stmt->bindParam(':order_date', $order_date);
            $stmt->bindParam(':total_price', $total_price);
            $stmt->execute();

            // Вывод сообщения об успешном оформлении заказа
            echo "Спасибо, ваш заказ на услугу с идентификатором $service_id принят!";
        } else {
            echo "Услуга с идентификатором $service_id не найдена.";
        }
    } else {
        echo "Не все необходимые данные были отправлены.";
    }

} catch(PDOException $e) {
    echo "Ошибка при оформлении заказа: " . $e->getMessage();
}
?>