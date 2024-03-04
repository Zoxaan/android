<?php include "header.php"; ?>
    <style>
        .container {
            margin-top: 100px;
            text-align: center;
        }
        form {
            display: inline-block;
        }
        .form-group {
            margin-bottom: 10px;
        }
    </style>
<body>
<div class="container">
    <h2>Регистрация</h2>
    <form method="post" action="regcontroller.php" oninvalid>
        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Введите имя" required>
        </div>
        <div class="form-group">
            <label for="mail">Email</label>
            <input type="email" class="form-control" id="mail" name="mail" placeholder="Введите email" required>
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Введите пароль" required>
        </div>
        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </form>
</div>
</body>