<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог товаров</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Каталог товаров</h1>
    </header>
    <main>
        <div class="gallery">
            <!-- Пример товара для шаблона -->
            <div class="item">
                <img src="images/example_product.jpg" alt="Пример товара" class="gallery-img">
                <h2>Название товара</h2>
                <p>Описание товара.</p>
            </div>
            <!-- Примерные данные -->
            <?php
            $sql = "SELECT * FROM items";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='item'>";
                    echo "<img src='uploads/" . $row["image"] . "' alt='" . $row["title"] . "' class='gallery-img'>";
                    echo "<h2>" . $row["title"] . "</h2>";
                    echo "<p>" . $row["description"] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>Нет товаров для отображения. Используйте этот шаблон для добавления новых товаров.</p>";
            }
            ?>
        </div>
        <!-- Модальное окно для галереи -->
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
        </div>
    </main>
    <script src="modal.js"></script>
</body>
</html>
