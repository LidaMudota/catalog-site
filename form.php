<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма заявки</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Отправить заявку</h1>
    </header>
    <main>
        <form action="submit_form.php" method="POST">
            <label for="name">Ваше имя:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Ваш email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Сообщение:</label>
            <textarea id="message" name="message" required></textarea>
            
            <button type="submit">Отправить заявку</button>
        </form>
    </main>
</body>
</html>
