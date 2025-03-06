<?php

$servername = "localhost";  // Hoặc IP máy chủ MySQL
$username = "root";         // Tên tài khoản MySQL
$password = "";             // Mật khẩu MySQL (để trống nếu chưa đặt)
$dbname = "jewelry_store";  // Tên database


// Kết nối MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error . ". Vui lòng kiểm tra lại máy chủ MySQL và cấu hình kết nối.");
}

?>