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

    // SQL запрос для получения информации о услугах
    $sql = "SELECT * FROM Services";
    $stmt = $db->query($sql);

    // Вывод данных о услугах
    echo '<div class="container mt-5">';
    echo '<div class="row">';
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="col-md-12 mb-4">';
        echo '<div class="card mb-3">';
        echo '<div class="row no-gutters">';
        echo '<div class="col-md-8">';
        echo '<img src="' . $row['image'] . '" class="card-img" alt="Alt текст">';
        echo '</div>';
        echo '<div class="col-md-7">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $row['name'] . '</h5>';
        echo '<p class="card-text">' . $row['description'] . '</p>';
        echo '<p class="card-text">Цена: ' . $row['price'] . '</p>';
        echo '<a href="full_service_info.php?id=' . $row['id'] . '" class="btn btn-primary">Подробнее</a>';

        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
    echo '</div>';

} catch (PDOException $e) {
    echo '<p class="text-danger">Ошибка получения данных: ' . $e->getMessage() . '</p>';
}

?>
<style>
    .container {
        display: flex;
        justify-content: center;
    }

    .card {
        width: 80%;
        margin-bottom: 20px;
    }

    .row.no-gutters {
        display: flex;
        flex-direction: row;
    }

    .col-md-4 {
        flex: 0 0 auto;
        width: auto;
    }

    .col-md-8 {
        flex: 1;
    }

    .card-img {
        width: 100%;
        height: auto;
    }
</style>
