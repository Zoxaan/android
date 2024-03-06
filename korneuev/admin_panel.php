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
} catch(PDOException $e) {
    echo "Ошибка подключения: " . $e->getMessage();
    exit;
}

// Получение количества зарегистрированных пользователей
$stmt = $db->query("SELECT COUNT(*) AS total_users FROM users");
$total_users = $stmt->fetchColumn();

// Получение количества товаров
$stmt = $db->query("SELECT COUNT(*) AS total_products FROM products");
$total_products = $stmt->fetchColumn();

// Получение количества услуг
$stmt = $db->query("SELECT COUNT(*) AS total_services FROM services");
$total_services = $stmt->fetchColumn();

// Получение количества заказов
$stmt = $db->query("SELECT COUNT(*) AS total_orders FROM orders");
$total_orders = $stmt->fetchColumn();

// Получение количества заказов услуг
$stmt = $db->query("SELECT COUNT(*) AS total_service_orders FROM serviceorders");
$total_service_orders = $stmt->fetchColumn();
?>

<style>

    .btn-secondary {
        background-color: #000000; /* Светло-синий цвет фона */
        border: none; /* Удаление границы */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.7); /* Свечение эффект */
        transition: all 0.3s ease; /* Плавный переход */
    }

    .btn-secondary:hover {
        background-color: #565656; /* Темнее синее при наведении */
        transform: translateY(-2px); /* Плавный эффект наведения */
    }

    .dropdown-menu .dropdown-item {
        color: #ffd000; /* Темный цвет текста */
    }

    .dropdown-menu .dropdown-item:hover {
    }
</style>

<body>
<div class="container">
    <h2 class="text-center mt-5">Admin Panel</h2>
    <p class="text-center">Я приветствую вас мой господин!</p>

    <div class="row justify-content-center mt-5">
        <div class="col-auto">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Просмотр
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="view_users.php">Просмотреть зарегистрированных пользователей (<?php echo $total_users; ?>)</a></li>
                    <li><a class="dropdown-item" href="view_products.php">Просмотреть товары (<?php echo $total_products; ?>)</a></li>
                    <li><a class="dropdown-item" href="view_services.php">Просмотреть услуги (<?php echo $total_services; ?>)</a></li>
                    <li><a class="dropdown-item" href="tablorders.php">Просмотреть заказы (<?php echo $total_orders; ?>)</a></li>
                    <li><a class="dropdown-item" href="tabloserviceorders.php">Просмотреть заказы услуг (<?php echo $total_service_orders; ?>)</a></li>
                </ul>
            </div>
        </div>

        <div class="col-auto">
            <div class="dropdown" style="margin-left: 10px;">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    Добавить
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item" href="add_product.php">Добавить товар</a></li>
                    <li><a class="dropdown-item" href="add_service.php">Добавить услугу</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Гифка -->
<!-- Гифка -->
<div class="text-center mt-5">
    <img src="https://img1.picmix.com/output/stamp/normal/9/0/8/9/889809_11cca.gif" alt="Funny GIF" ">
</div>


</body>
