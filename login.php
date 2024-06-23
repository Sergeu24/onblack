<?php
session_start();
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Проверка на валидность введенных данных
    if (empty($username) || empty($password)) {
        echo "Все поля обязательны для заполнения";
        exit;
    }

    // Поиск пользователя в базе данных
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Получение данных пользователя из базы данных
        $row = $result->fetch_assoc();
        $db_username = $row['username'];
        $db_password = $row['password'];

        // Проверка хэша пароля
        if ($username === $db_username && password_verify($password, $db_password)) {
            // Установка сессии для авторизации
            $_SESSION['username'] = $username;
            echo "Авторизация успешна";
            if ($username === 'admin') {
                header('Location: adminka.php');
                exit;
            } else {
                header('Location: profile.php');
                exit;
            }
        } else {
            echo "Неверный пароль или ФИО";
        }
    } else {
        echo "Пользователь не найден";
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>
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

.registr button {
  background-color: #369882;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
  position: relative;
  right: 200px;
}

.registr button:hover {
  background-color: #444;
}
.reg {
  text-decoration: none;
  color: #000;
}
.re {
  text-decoration: none;
  color: #000;
  display: flex
} 
.nav__link{
  text-decoration: none;
  color: #000;
  display: flex;
}
.nav__linkk {
  text-decoration: none;
  color: #000;
  position: relative;
  left: 200px;
}

</style>
</head>
<body>
    <header>
        <form method="post" action="login.php">
            <div class="container">
                <h1>Авторизация</h1>
                <div class="text">
                    <input class="modal" type="text" name="username" placeholder="ФИО" required>
                    <input class="modal" type="password" name="password" placeholder="Пароль" required>
                    <div class="nav__link"><a class="nav__link" href="register.php">Регестрация</div>
                    <div class="nav__linkk"><a class="nav__linkk" href="index.php">Назад</div> 
                </div>
               
                
                <div class="registr">
                    <button class="registerbtn" type="submit">Вход</button>
                </div>
            </div>
        </form>
    </header>      
</body>
</html>
