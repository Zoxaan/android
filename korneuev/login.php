<?php include "header.php"; ?>
<body>
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

<div class="container">
    <h2>Авторизация</h2>
    <form method="post" action="log_controller.php" oninvalid>
        <div class="form-group">
            <label for="mail">Email:</label>
            <input type="email" class="form-control" id="mail" name="mail" required>
        </div>
        <div class="form-group">
            <label for="password">Пароль:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Войти</button>
    </form>
</div>
<?php include "foter.php"; ?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>