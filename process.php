<?php
// Connect to the database
$conn = mysqli_connect("localhost", "k92972ks_onblack", "33*ONBLACk", "k92972ks_onblack");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Insert data into the database
  $sql = "INSERT INTO contact (name, email, message) VALUES (?, ?, ?)";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);
  mysqli_stmt_execute($stmt);

  // Check if the insertion was successful
  if (mysqli_stmt_affected_rows($stmt) > 0) {
    echo "Спасибо за ваше обращение! Наш менеджер перезвонит вам в ближайшее время.";
  } else {
    echo "Ошибка при отправке сообщения. Пожалуйста, попробуйте снова.";
  }

  // Close the statement and connection
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
?>