<?php
session_start();

if (!isset($_SESSION['username']) || !isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}

$username = $_SESSION['username'];
$email = $_SESSION['email'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница профиля</title>
    <style>
body {
  font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    
}

footer {
  background-color: #333; /* темный фон */
  color: #fff; /* белый текст */
  padding: 20px; /* отступы */
  clear: both; /* очистка float */
}

.cont {
  max-width: 1200px; /* максимальная ширина контейнера */
  margin: 0 auto; /* центрирование контейнера */
  padding: 20px; /* отступы */
}

.roww {
  display: flex; /* flexbox для равномерного распределения элементов */
}

.col-md-4 {
  width: 33.33%; /* ширина колонки */
  margin: 15px; /* отступы */
}

h5 {
  font-weight: bold; /* жирный текст */
  margin-bottom: 15px; /* отступ после заголовка */
  font
}

ul {
  list-style: none; /* удаление маркеров списка */
  padding: 0; /* отступы */
  margin: 0; /* отступы */
}

li {
  margin-bottom: 10px; /* отступ между пунктами списка */
}

a {
  color: #fff; /* белый текст ссылок */
  text-decoration: none; /* удаление подчеркивания ссылок */
}

a:hover {
  color: #ccc; /* серый текст ссылок при наведении */
}

.header {
    width: 100%;
    

    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
}

.header.fixed {
    padding: 10px 0;

    background-color: #eb8b8d;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);

    position: fixed;
    top: 0;
    left: 0;
    right: 0;

    transform: translate3d(0, 0, 0);
}

.header.active {
    background-color: #eb8b8d;
}

.header__inner {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.header__logo {
	display: flex;

}





.nav {
    font-size: 14px;
    text-transform: uppercase;
}

.nav__link {
    display: inline-block;
    vertical-align: top;
    margin: 0 15px;
    position: relative;

    color: #000000;
    text-decoration: none;

    transition: color .1s linear;
	transition: none;
}

.nav__link:after {
    content: "";
    display: block;
    width: 100%;
    height: 3px;

    background-color: #fce38a;
    opacity: 0;

    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1;

    transition: opacity .1s linear;
}

.nav__link:hover {
    color: #fce38a;
}

.nav__link:hover:after,
.nav__link.active:after {
    opacity: 1;
}

.nav__link.active {
    color: #fce38a;
}



.nav-toggle {
    width: 30px;
    padding: 10px 0;
    display: none;

    font-size: 0;
    color: transparent;

    border: 0;
    background: none;
    cursor: pointer;

    position: absolute;
    top: 24px;
    right: 24px;
    z-index: 1;
}

.nav-toggle:focus {
    outline: 0;
}

.nav-toggle__item {
    display: block;
    width: 100%;
    height: 3px;

    background-color: #fff;

    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: auto;

    transition: background .2s linear;
}









.btn {
    display: inline-block;
    vertical-align: top;
    padding: 8px 30px;

    border: 3px solid #fff;

    font-size: 14px;
    font-weight: 700;
    color: #fff;
    text-transform: uppercase;
    text-decoration: none;

    transition: background .1s linear, color .1s linear;
}

.btn:hover {
    background-color: #fff;
    color: #333;
} 

.hedd {
    display: flex;
    justify-content: center;
    background-color: #fff;
    padding: 20px;
    
}






.center-column {
    display: flex;
    flex-direction: column;
    align-items: center;
}

h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

h2 {
    font-size: 20px;
    margin-bottom: 10px;
}

.welcome {
    margin-bottom: 20px;
}

.my-subscriptions, .additional-services {
    width: 100%;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 20px;
}

.no-subscriptions, .no-additional-services {
    color: #999;
    font-size: 16px;
}

.otz {
    width: 100%;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 20px;
}

.otz h2 {
    font-size: 20px;
    margin-bottom: 10px;
    color: #333;
}

.otz form {
    display: flex;
    flex-direction: column;
}

.otz label {
    font-weight: bold;
    margin-bottom: 5px;
}

.otz input[type="text"],
.otz input[type="email"],
.otz textarea {
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.otz input[type="submit"] {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    background-color: #62c6ff;
    color: white;
    text-transform: uppercase;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.otz input[type="submit"]:hover {
    background-color: #d97777;
}


    </style>
</head>
<body>
    <header class="header" id="header">
		<div class="container">
			<div class="header__inner">
				<div  data-scroll="#intro">
                <a href="index.php">
					<img class="header__logo" src="img/1.jpg" >
				</div>
				
	
				<nav class="nav" id="nav">
					<a class="nav__link" href="abb.php" data-scroll="#about">Абонемент</a>
					<a class="nav__link" href="dop_uslugi.php" data-scroll="#services">Дополнительные услуги</a>
					<a class="nav__link" href="login.php" data-scroll="#blog">Личный кабинет</a>
				</nav>
	
				<button class="nav-toggle" id="nav_toggle" type="button">
					<span class="nav-toggle__item">Menu</span>
				</button>
			</div>
		</div>
	</header>
  <div class="hedd">
    <div class="center-column">
        <h1>Добро пожаловать, <?php echo $_SESSION['username']; ?></h1>
            <div class="welcome">
                <p>Здесь можно посмотреть информацию о вашем аккаунте, абонементах и дополнительных услугах.</p>
            </div>
            <div class="my-subscriptions">
                <h2>Мой профиль</h2>
                <p>ФИО: <?php echo $username; ?></p>
                <p>Email: <?php echo $email; ?></p>
              </div>
              <div class="my-subscriptions">
  <h2>Мои абонементы</h2>
  <?php if (!empty($subscription_theme) &&!empty($subscription_message) &&!empty($subscription_image)):?>
    <img src="images/<?php echo $subscription_image;?>" alt="<?php echo $subscription_theme;?>">
    <p><b>Название:</b> <?php echo $subscription_theme;?></p>
    <p><b>Описание:</b> <?php echo $subscription_message;?></p>
  <?php else:?>
    <p class="no-subscriptions">У вас нет абонементов...</p>
  <?php endif;?>
</div>
<div class="additional-services">
  <h2>Дополнительные услуги</h2>
  <?php if (!empty($additional_service_name) &&!empty($additional_service_description)):?>
    <p><b>Услуга:</b> <?php echo $additional_service_name;?></p>
    <p><b>Описание:</b> <?php echo $additional_service_description;?></p>
  <?php else:?>
    <p class="no-additional-services">Дополнительных услуг нет...</p>
  <?php endif;?>
</div>
<div class="otz">
    <h2>Написать отзыв</h2>

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name" required><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    <label for="review">Отзыв:</label>
    <textarea id="review" name="review" required></textarea><br><br>
    <input type="submit" value="Отправить отзыв">
</form>

<?php
// Connect to database
$servername = "localhost";
$username = "k92972ks_onblack";
$password = "33*ONBLACk";
$dbname = "k92972ks_onblack";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $review = $_POST["review"];

    $sql = "INSERT INTO reviews (name, email, review) VALUES ('$name', '$email', '$review')";
    $conn->query($sql);

    exit;
}
?>

</div>
        </div>
    </div>
    <footer>
  		<div class="con">
  		  <div class="roww">
  		    <div class="col-md-4">
  		      <h3>ONBLACK</h3>
  		      <p>Войди в темноту, выйди чемпионом!</p>
  		    </div>
  		    <div class="col-md-4">
  		      <h4>Контакты</h4>
				<p>Телефон: +7 (495) 123-45-67</p>
  		      	<p>Адрес: Ижевск, ул.Свободы, 202</p>
  		    </div>
  		    <div class="col-md-4">
  		      <h4>Навигация сайта</h4>
  		        <ul>
  		          <li><a href="index.php">Главная</a></li>
  		          <li><a href="abb.php">Абонимент</a></li>
  		          <li><a href="dop_uslugi.php">Дополнительные услуги</a></li>
  		          <li><a href="login.php">Личный кабинет</a></li>
  		        </ul>
  		      </p>
  		    </div>
  		  </div>
  		</div>
	</footer>



</div>
</body>
</html>