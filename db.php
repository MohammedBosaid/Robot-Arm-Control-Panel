<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "robot_db";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}
?>
