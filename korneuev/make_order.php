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
    $name = $_POST['name'];
    $product_id = $_POST['product_id'];

    // Поиск user_id по имени пользователя
    $stmt = $db->prepare("SELECT id FROM users WHERE name = :name");
    $stmt->bindParam(':name', $name);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Получение цены товара
    $stmt = $db->prepare("SELECT price FROM products WHERE id = :product_id");
    $stmt->bindParam(':product_id', $product_id);
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    $product_price = $product['price'];

    if ($user) {
        $user_id = $user['id'];

        // Получение текущей даты и времени
        $order_date = date("Y-m-d H:i:s");

        // SQL запрос для вставки данных заказа в таблицу orders
        $stmt = $db->prepare("INSERT INTO orders (user_id, product_id, order_date, product_price) VALUES (:user_id, :product_id, :order_date, :product_price)");
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':product_id', $product_id);
        $stmt->bindParam(':order_date', $order_date);
        $stmt->bindParam(':product_price', $product_price);
        $stmt->execute();

        // Вывод сообщения об успешном оформлении заказа
        echo "Спасибо, $name, ваш заказ на услугу с идентификатором $product_id принят!";
    } else {
        echo "Пользователь с именем $name не найден.";
    }

} catch(PDOException $e) {
    echo "Ошибка при оформлении заказа: " . $e->getMessage();
}
?>
