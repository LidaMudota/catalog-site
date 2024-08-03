<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Все заявки</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Все заявки</h1>
    </header>
    <main>
        <ul>
            <?php
            $sql = "SELECT * FROM applications";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<li>";
                    echo "<strong>Имя:</strong> " . $row['name'] . "<br>";
                    echo "<strong>Email:</strong> " . $row['email'] . "<br>";
                    echo "<strong>Сообщение:</strong> " . $row['message'] . "<br>";
                    echo "</li>";
                }
            } else {
                echo "Нет заявок для отображения.";
            }
            ?>
        </ul>
    </main>
</body>
</html>
