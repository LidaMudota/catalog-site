<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO applications (name, email, message) VALUES ('$name', '$email', '$message')";
    if ($conn->query($sql) === TRUE) {
        echo "Заявка успешно отправлена.";
    } else {
        echo "Ошибка: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результат отправки</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Результат отправки заявки</h1>
    </header>
    <main>
        <p><a href="form.php">Вернуться к форме</a></p>
        <p><a href="view_applications.php">Посмотреть все заявки</a></p>
    </main>
</body>
</html>
