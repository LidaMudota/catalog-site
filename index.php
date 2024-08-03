<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Добро пожаловать на наш сайт</h1>
    </header>
    <main>
        <div class="carousel">
            <div class="carousel-item">
                <img src="images/banner1.jpg" alt="Баннер 1">
            </div>
            <div class="carousel-item">
                <img src="images/banner2.jpg" alt="Баннер 2">
            </div>
            <div class="carousel-item">
                <img src="images/banner3.jpg" alt="Баннер 3">
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <div class="dots">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <div class="links">
            <a href="catalog.php">Перейти к каталогу</a>
            <a href="upload.php">Загрузить и скачать документы</a>
            <a href="form.php">Отправить заявку</a>
            <div style="display:none;">
                <a href="admin.php?key=YOUR_SECRET_KEY">Администрирование</a>
            </div>
        </div>
    </main>
    <script src="carousel.js"></script>
</body>
</html>
