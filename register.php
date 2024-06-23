<?php
session_start(); // Add this line

include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $terms = $_POST['terms'];
    // Проверка на валидность введенных данных
    if (empty($username) || empty($email) || empty($password) || empty($password_confirm) || empty($terms)) {
        echo "Все поля обязательны для заполнения";
        exit;
    }
    // Проверка на валидность email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Неверный формат email";
        exit;
    }
    // Проверка на совпадение паролей
    if ($password !== $password_confirm) {
        echo "Пароли не совпадают";
        exit;
    }
    // Проверка на согласие с условиями
    if (!$terms) {
        echo "Вы должны согласиться с условиями";
        exit;
    }
    // Создание хэша пароля
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    // Создание нового пользователя в базе данных
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password_hash')";
    if ($conn->query($sql) === TRUE) {
      $_SESSION['username'] = $username;
      $_SESSION['email'] = $email;
      echo "Регистрация успешна";
      header("Location: profile.php");
      exit();
  } else {
      echo "Ошибка: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регестрация</title>
    <style>
        body {
  background-color: #3698b3;
  font-family: Arial, sans-serif;
}

header {
  background-color: #369882;
  padding: 20px;
  border-radius: 10px;
  margin: 20px auto;
  max-width: 600px;
  box-shadow: 0px 10px 15px rgba(0,0,0,0.1);
}

header h1 {
  color: #fff;
  text-align: center;
  margin-bottom: 30px;
}

.container {
  background-color: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 10px 15px rgba(0,0,0,0.1);
}

.text {
  display: flex;
  flex-wrap: wrap;
  margin: 20px 0;
}

.text input {
  flex: 1 1 100%;
  margin-bottom: 20px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.registr {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
}

.registr input[type="checkbox"] {
  margin-right: 10px;
}

.registr p {
  font-size: 14px;
  line-height: 1.5;
}

.root {
  display: flex;
  justify-content: center;
}

.registerbtn {
  background-color: #369882 ;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}

.registerbtn:hover {
  background-color: #444;
}
    </style>
</head>
<body>
    <form method="post" action="register.php">
        <div class="container">
            <h1>Регестрация</h1>
            <div class="text">
                <input type="text" name="username" placeholder="ФИО" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Пароль" required>
                <input type="password" name="password_confirm" placeholder="Повторите пароль" required>
            </div>
            <div class="registr">
                <input type="checkbox" name="terms" required>
                <p>Я ознакомлен(-на) и согласен(-на) с условиями Договора, Правилами техники безопасности, Правилами комплекса и даю свое согласие на обработку персональных данных.</p>
            </div>  
            <div class="root">  
                <button class="registerbtn" type="submit">Регистрация</button>
            </div>
        </div>
    </form>
</body>
</html>

