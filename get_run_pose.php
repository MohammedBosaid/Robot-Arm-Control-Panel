<?php
include 'db.php';

$sql = "SELECT * FROM poses WHERE status = 1 LIMIT 1";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
  $row = $result->fetch_assoc();
  echo json_encode([
    "motor1" => $row["motor1"],
    "motor2" => $row["motor2"],
    "motor3" => $row["motor3"],
    "motor4" => $row["motor4"],
    "motor5" => $row["motor5"],
    "motor6" => $row["motor6"]
  ]);
} else {
  echo json_encode(["message" => "No active pose"]);
}

$conn->close();
?>
