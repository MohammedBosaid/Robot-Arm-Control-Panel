<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $m1 = $_POST['motor1'];
  $m2 = $_POST['motor2'];
  $m3 = $_POST['motor3'];
  $m4 = $_POST['motor4'];
  $m5 = $_POST['motor5'];
  $m6 = $_POST['motor6'];

  if (is_numeric($m1) && is_numeric($m2) && is_numeric($m3) && is_numeric($m4) && is_numeric($m5) && is_numeric($m6)) {
    $sql = "INSERT INTO poses (motor1, motor2, motor3, motor4, motor5, motor6) 
            VALUES ($m1, $m2, $m3, $m4, $m5, $m6)";
    if ($conn->query($sql) === TRUE) {
      echo "Pose saved successfully";
    } else {
      echo "Database error: " . $conn->error;
    }
  } else {
    echo "Invalid input.";
  }
}

$conn->close();
?>
