<?php
include 'db.php';

$sql = "UPDATE poses SET status = 0";
if ($conn->query($sql) === TRUE) {
  echo "Status reset.";
} else {
  echo "Error resetting status: " . $conn->error;
}

$conn->close();
?>
