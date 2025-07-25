<?php
include 'db.php';

if (isset($_GET['id'])) {
  $id = intval($_GET['id']);

  $sql = "DELETE FROM poses WHERE id = $id";
  if ($conn->query($sql) === TRUE) {
    echo "Pose deleted successfully.";
  } else {
    echo "Error deleting pose: " . $conn->error;
  }
}

$conn->close();
?>
