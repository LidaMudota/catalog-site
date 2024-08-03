<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $filename = $file['name'];
    $destination = 'uploads/' . $filename;

    if (move_uploaded_file($file['tmp_name'], $destination)) {
        $sql = "INSERT INTO uploads (filename) VALUES ('$filename')";
        if ($conn->query($sql) === TRUE) {
            echo "Файл успешно загружен.";
        } else {
            echo "Ошибка: " . $conn->error;
        }
    } else {
        echo "Ошибка при загрузке файла.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Загрузка файла</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Загрузить документ</h1>
    </header>
    <main>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file" required>
            <button type="submit">Загрузить</button>
        </form>
        <h2>Загруженные файлы</h2>
        <ul>
            <?php
            $sql = "SELECT * FROM uploads";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<li><a href='uploads/" . $row['filename'] . "' download>" . $row['filename'] . "</a></li>";
                }
            } else {
                echo "Нет загруженных файлов.";
            }
            ?>
        </ul>
    </main>
</body>
</html>
