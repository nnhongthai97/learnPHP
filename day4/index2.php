<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
for($i = 1; $i < 10; $i++) {
    if ($i == 5) {
        // Lệnh continue nó sẽ bỏ qua các câu lệnh bên dưới của vòng lặp
        // và chạy sang lần lặp tiếp theo
        continue;
    }
    echo '<br>' . $i;
}
?>
</body>
</html>