<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<?php
// hàm isset() check xem giá trị hoặc biến có tồn tại không
if (isset($_GET) && isset($_GET["email"]) && isset($_GET["password"])) {
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    $email = $_GET['email'];
    $password = $_GET['password'];
    echo '<br>$email' . $email;
    echo '<br>$password' . $password;
}
?>

</body>
</html>