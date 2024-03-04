<?php include "header.php"; ?>

<body>
<div class="container">
    <h1>Оргтехника</h1>
    <p>Добро пожаловать на наш сайт товаров</p>
    <hr>

    <!-- Карусель -->
    <style>
        .carousel-item img {
            width: 100%;
            max-height: 300px;
        }
        .carousel {
            width: 100%;
        }

        /* Установка единого размера для всех изображений карточек товаров */
        .card-img-top {
            width: 100%;
            height: auto;
            max-height: 200px; /* Выберите желаемую высоту */
        }
    </style>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://3dnews.ru/assets/external/illustrations/2023/09/11/1092862/printer-pixabay.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://lekom.ru/lekom_main_page_middle/images/complex_it_solutions.webp" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <h2>Товары</h2>
    <div class="row">
        <?php
        // Подключение к базе данных
        $servername = "localhost";
        $username = "zoxan";
        $password = "123";
        $dbname = "textovarorg";

        try {
            $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Получение списка товаров из базы данных
            $stmt = $db->query("SELECT * FROM products");
            $products = $stmt->fetchAll();

            // Вывод карточек товаров
            foreach ($products as $product) {
                echo '<div class="col-md-3 col-sm-5">'; // Установка ширины карточки на устройствах среднего размера и больше
                echo '<div class="card">';
                echo '<img src="' . $product['image'] . '" class="card-img-top" alt="...">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $product['name'] . '</h5>';
                echo '<p class="card-text">' . $product['description'] . '</p>';
                echo '<p class="card-text">Цена: ' . $product['price'] . '</p>';
                // Добавление ссылки с передачей ID товара
                echo '<a href="product_details.php?id=' . $product['id'] . '" class="btn btn-primary">Подробнее</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } catch (PDOException $e) {
            echo "Ошибка получения данных: " . $e->getMessage();
        }
        ?>
    </div>
</div>
<?php include "foter.php"; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
