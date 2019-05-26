<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
Sự khác biệt vòng lặp while vs dowhile
-vòng lặp while chỉ chạy khi điều kiện đúng
-  vòng lặp do while chạy lần đầu tiên ngay cả điều kiện == false;
từ lần thứ 2 vòng lặp while chạy khi điều kiện == true;
    <?php
    $n = 20;
    while($n < 10) {
        echo "<br> while $n";
        $n++;
    }
    $n = 20;
    do {
        echo "<br> do ... while $n";
        $n++;
    }while($n < 10);
    ?>
</body>
</html>