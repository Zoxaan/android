<body>
<style>
    body {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('uploads/martin-katler-l1lFK8dj6fA-unsplash.jpg') no-repeat center center fixed;
        background-size: cover;
        color: #f8f9fa;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }
    .header {
        background-color: rgba(0, 0, 0, 0.8);
        padding: 10px 0;
        text-align: center;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
    }
    .header a {
        text-decoration: none;
        color: #f8f9fa;
        font-size: 24px;
        font-weight: bold;
        transition: color 0.3s ease;
    }
    .header a:hover {
        color: #007bff;
    }
    .container {
        margin-top: 150px;
        text-align: center;
    }
    form {
        display: inline-block;
        background-color: rgba(0, 0, 0, 0.8);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
    }
    .form-group {
        margin-bottom: 20px;
    }
    .form-control {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #f8f9fa;
        background-color: rgba(255, 255, 255, 0.1);
        color: #f8f9fa;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 10px 20px;
        border-radius: 5px;
        color: #f8f9fa;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
        transform: scale(1.05);
    }
</style>

<div class="header">
    <a href="index.php">Your Site</a>
</div>

<div class="container">
    <h2>Регистрация</h2>
    <form method="post" action="regcontroller.php">
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