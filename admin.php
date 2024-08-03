<?php
session_start();

if (!isset($_GET['key']) || $_GET['key'] !== 'YOUR_SECRET_KEY') {
    header("HTTP/1.0 403 Forbidden");
    echo "Доступ запрещен.";
    exit();
}
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Администрирование</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Администрирование каталога</h1>
    </header>
    <main>
        <h2>Добавить новый товар</h2>
        <form action="add_item.php?key=YOUR_SECRET_KEY" method="post" enctype="multipart/form-data">
            <label for="title">Название:</label>
            <input type="text" id="title" name="title" required>
            
            <label for="description">Описание:</label>
            <textarea id="description" name="description" required></textarea>
            
            <label for="image">Изображение:</label>
            <input type="file" id="image" name="image" required>
            
            <button type="submit">Добавить товар</button>
        </form>
    </main>
</body>
</html>
