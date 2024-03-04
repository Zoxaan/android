<?php include "header.php"; ?>
<body>
<div class="container">

    <h1>Оргтехника</h1>
    <p>Добро пожаловать на наш сайт по продаже и обслуживанию оргтехники!</p>
    <hr>

    <!-- Карусель -->
    <style>
        .carousel-item img {
            max-height: 300px; /* Выберите желаемую высоту */
        }
    </style>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://lekom.ru/lekom_maintenance/images/banner.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://lekom.ru/lekom_main_page_middle/images/complex_it_solutions.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://png.pngtree.com/thumb_back/fw800/background/20230524/pngtree-mobile-phone-tablet-and-laptop-on-black-background-animated-and-retouched-image_2615783.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>


    <h2>Товары</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="https://printeco.ru/upload/iblock/a11/a1173dc52ce86617c4b6ac03960c1369.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Товар 1</h5>
                    <p class="card-text">Описание товара 1</p>
                    <p class="card-text">Цена: 1000</p>
                    <a href="product_details.php" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="#" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Товар 2</h5>
                    <p class="card-text">Описание товара 2</p>
                    <p class="card-text">Цена: 2000</p>
                    <a href="#" class="btn btn-primary">Подробнее</a>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="#" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Товар 3</h5>
                    <p class="card-text">Описание товара 3</p>
                    <p class="card-text">Цена: 3000</p>
                    <a href="#" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
        </div>







    <div class="row mt-5">
        <div class="col-md-12 text-left">
            <h3>О нашей компании</h3>
            <p>Мы - компания, специализирующаяся на продаже и обслуживании оргтехники. Наша цель - предоставить нашим клиентам высококачественную продукцию и отличный сервис.</p>
        </div>
    </div>

    <!-- Маленькая картинка -->
    <div class="row mt-3">
        <div class="col-md-12 text-left">
            <img src="https://it-usluga.ru/wp-content/uploads/2022/03/pdn.jpg" alt="Small Image" style="max-width: 250px;">
            <a href="company.php" class="btn btn-success">Подробнее</a>
        </div>
    </div>

</div>

</div>
<?php include "foter.php"; ?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
