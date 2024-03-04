<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <style>
        .custom-navbar {
            background-color: rgba(59, 122, 87, 0.7); /* Прозрачный темно-зеленоватый цвет */
        }
        .dropdown-menu .dropdown-item:hover {
            color: #009a41 !important; /* Цвет текста при наведении (зеленый) */
        }
        .navbar-brand .logo {
            max-height: 40px; /* Устанавливаем максимальную высоту для логотипа */
        }

        .company-info h2 {
            color: #3b7a57; /* Цвет заголовка */
        }

        .company-info p {
            font-size: 18px;
            position: relative;
            padding-left: 20px;
        }
    </style>

</head>
<body>
<div class="container mt-3">
    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="PrinTelo.svg" class="logo" alt="Логотип"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="category.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Категории
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="category.php">Категории</a></li>
                            <li><a class="dropdown-item" href="uslugi.php">Просмотерть услуги</a></li>
                            <li><a class="dropdown-item" href="tovars.php">Просмотерть товар</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Компания
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="company.php">О нас</a></li>
                            <li><a class="dropdown-item" href="info.php">Информация</a></li>
                            <li><a class="dropdown-item" href="#">Пока не ебу</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacts.php">Контакты</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Войти
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="login.php">Авторизация</a></li>
                            <li><a class="dropdown-item" href="registration.php">Регистрация</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Выйти</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
