<?php
include 'db.php';

if (isset($_GET['id'])) {
  $id = intval($_GET['id']);

  // أولاً: تصفير كل الأوضاع
  $conn->query("UPDATE poses SET status = 0");

  // ثانياً: تعيين الوضع المطلوب كالوضع الحالي
  $sql = "UPDATE poses SET status = 1 WHERE id = $id";
  if ($conn->query($sql) === TRUE) {
    echo "Pose $id is now active.";
  } else {
    echo "Database error: " . $conn->error;
  }
}

$conn->close();
?>
