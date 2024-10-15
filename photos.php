<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Фотогаллерея</title>
</head>
<body>
<a href="index.html">Главная</a>


<div class="mt-6 col-3 text-center mx-auto">
    <h2>Задание 3.4</h2>
    <form action="3-4FORM.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="file" class="form-label">Изображение</label>
            <input type="file"  class="form-control" id="file" name="file">
        </div>
        <button type="submit" class="btn btn-primary">Загрузить</button>
    </form>

</div>


<div class="container">
    <div class="row row-cols-2">


<?php
           include '3-4.php';
?>
    </div>
</div>
</body>
</html>