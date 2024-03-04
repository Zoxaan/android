<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить услугу</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Добавить услугу</h2>
    <form method="post" action="add_service_process.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Название:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="price">Цена:</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="form-group">
            <label for="description">Описание:</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="bigdescription">Большое описание:</label>
            <textarea class="form-control" id="bigdescription" name="bigdescription"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Изображение:</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Добавить услугу</button>
    </form>
</div>
<div class="text-center mt-5">
    <img src="https://img.wattpad.com/c0907932b682f2842c211d4af5b764c2e6c75430/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f776174747061642d6d656469612d736572766963652f53746f7279496d6167652f6e4551756831364b5743377858773d3d2d3732303438383936372e313539363162656264343934313937613138373538333937363432362e676966" alt="Funny GIF" ">
</div>
</body>
</html>
