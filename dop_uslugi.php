<?php
  // Create database connection
  $db = mysqli_connect("localhost", "k92972ks_onblack", "33*ONBLACk", "k92972ks_onblack");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
        
    $theme = mysqli_real_escape_string($db, $_POST['theme']); 
    $message = mysqli_real_escape_string($db, $_POST['message']); 
    // Get image name
        $image = $_FILES['image']['name'];
        // Get text
        

        // image file directory
        $target = "images/".basename($image);

        $sql = "INSERT INTO uslugi (theme, message, image) VALUES ('$theme', '$message', '$image')";
        // execute query
        mysqli_query($db, $sql);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
        }else{
                $msg = "Failed to upload image";
        }
  }
  $result = mysqli_query($db, "SELECT * FROM uslugi");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Дополнительные услуги</title>
</head>
<style>
  body {
  font-family: 'Montserrat', sans-serif;
}

    /* Подвал сайта */
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






#img_div {
    display: inline-block;
    margin: 0 5rem;
    font-size: 1.5rem;
    vertical-align: top;
    margin-bottom: 10px;
    padding: 30px 0px;
    width: 300px;
}

#img_div img {
   width: 300px;
   height: 300px;
   
}

#img_div b {
   display: block;
   font-size: 20px;
   
}

button {
    background-color: #62c6ff; /* зеленый цвет фона */
    border: none; /* удаление границы */
    color: white; /* белый текст */
    padding: 15px 32px; /* отступы по горизонтали и вертикали */
    text-align: center; /* выравнивание текста по центру */
    text-decoration: none; /* удаление подчеркивания */
    display: inline-block; /* отображение как строчный элемент */
    font-size: 16px; /* размер шрифта */
    margin: 4px 2px; /* отступы по горизонтали и вертикали */
    cursor: pointer; /* указатель мыши при наведении */
    border-radius: 12px; /* скругление углов */
}
</style>
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
    <h2>Дополнительные услуги</h2>

    <?php
        while ($row = mysqli_fetch_array($result)) {
        echo "<div id='img_div'>";
            
            echo "<img src='images/".$row['image']."' >";
            echo  "<b> Название: </b>";
            echo "".$row['theme']."<br>";
            echo  "<br> <b> Описание: </b>";
            echo "".$row['message']."<br>";
            echo "<button>Купить</button>";
        echo "</div>";
        }
    ?>
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
</body>
</html>

