<?php
session_start();

if (!isset($_GET['key']) || $_GET['key'] !== 'YOUR_SECRET_KEY') {
    header("HTTP/1.0 403 Forbidden");
    echo "Доступ запрещен.";
    exit();
}
include 'db.php';

$title = $_POST['title'];
$description = $_POST['description'];
$image = $_FILES['image']['name'];
$target = "uploads/" . basename($image);

$sql = "INSERT INTO items (title, description, image) VALUES ('$title', '$description', '$image')";

if ($conn->query($sql) === TRUE) {
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo "Товар успешно добавлен.";
    } else {
        echo "Ошибка при загрузке изображения.";
    }
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
