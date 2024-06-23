<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админка</title>
    <style>



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



/* My Subscriptions */

.my-subscriptions {
  margin-bottom: 40px;
}

.my-subscriptions h2 {
  margin-top: 0;
}

.no-subscriptions {
  font-size: 18px;
  color: #666;
}

/* Create Block */

.create_block {
  margin-bottom: 20px;
}

.create_block p {
  margin-bottom: 10px;
}

.create_block input[type="text"], .create_block textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
}

.create_block input[type="file"] {
  padding: 10px;
  border: 1px solid #ccc;
}

.create_block input[type="submit"] {
  background-color: #337ab7;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.create_block input[type="submit"]:hover {
  background-color: #23527c;
}

/* Tables */

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  border: 1px solid #ddd;
  padding: 10px;
  text-align: left;
}

th {
  background-color: #f0f0f0;
}

tr:nth-child(even) {
  background-color: #f9f9f9;
}

/* Contact */

.contactt {
  margin-bottom: 40px;
}

.contactt h2 {
  margin-top: 0;
}

.contactt table {
  width: 100%;
  border-collapse: collapse;
}

.contactt th, .contactt td {
  border: 1px solid #ddd;
  padding: 10px;
  text-align: left;
}

.contactt th {
  background-color: #f0f0f0;
}

.contactt tr:nth-child(even) {
  background-color: #f9f9f9;
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

footer a {
  color: #fff; /* белый текст ссылок */
  text-decoration: none; /* удаление подчеркивания ссылок */
}

footer a:hover {
  color: #ccc; /* серый текст ссылок при наведении */
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
            <h1>Добро пожаловать, Админ</h1>
            <div class="welcome">
                <p>Здесь можно посмотреть и добавлять информацию о аккаунте клинта, абонементах и дополнительных услугах.</p>
            </div>
            <div class="my-subscriptions">
                <h2>Данные об аккаунтах</h2>
                <p class="no-subscriptions">
                    <?php
                        require_once 'config.php';

                        $sql = "SELECT * FROM users";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            echo "<table border='1'>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Delete</th>
                                </tr>";

                            while($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td>". $row["id"]. "</td>
                                        <td>". $row["username"]. "</td>
                                        <td>". $row["email"]. "</td>
                                        <td>". $row["password"]. "</td>
                                        <td><a href='delete.php?id=" . $row["id"] . "'>Delete</a></td>
                                    </tr>";
                            }

                            echo "</table>";
                        } else {
                            echo "0 results";
                        }
                   ?>
                </p>
            </div>
            <div class="my-subscriptions">
                <h2>Абонементы</h2>
                <form action="abb.php" method="POST" enctype="multipart/form-data">
                    <main class="container">
                    <h1>Создать абонимент</h1>
                        <div class="create_block">
                            <p for="theme">Название:</p>
                            <input type="text" name="theme" id="" class="input_cr">
                        </div>
                        <div class="create_block">
                            <p for="message">Описание:</p>
                            <textarea name="message" id="message" class="input_cr area"></textarea>
                        </div>
                        <div class="create_block">
                            <p for="price">Цена:</p>
                            <input type="number" name="price" placeholder="Цена">
                        </div>
                        <div class="create_block">
                            <p for="image">Фото:</p>
                            <input type="file" name="image" id="photo" class="input_cr ">
                        </div>
                        <div class="create_block">
                            <input type="submit" name="upload" value="Оставить заявку " class="input_cr input_name">
                        </div>
                    </main>
                </form>
                <h2>Удалить абонимент</h2>
                <?php
                    require_once 'config.php';

                    $sql = "SELECT * FROM aboniment";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    echo "<table border='1'>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Message</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Delete</th>
                            </tr>";

                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["id"] . "</td>
                                <td>" . $row["theme"] . "</td>
                                <td>" . $row["message"] . "</td>
                                <td>" . $row["price"] . "</td>
                                <td>" . $row["image"] . "</td>
                                <td><a href='delete_abb.php?id=" . $row["id"] . "'>Delete</a></td>
                              </tr>";
                    }


                    echo "</table>";
                } else {
                    echo "0 results";
                }?>
            </div>
            <div class="additional-services">
                <h2>Дополнительные услуги</h2>
                <form action="dop_uslugi.php" method="POST" enctype="multipart/form-data">
                    <main class="container">
                    <h1>Создать услугу</h1>
                        <div class="create_block">
                            <p for="theme">Название:</p>
                            <input type="text" name="theme" id="" class="input_cr">
                        </div>
                        <div class="create_block">
                            <p for="message">Описание:</p>
                            <textarea name="message" id="message" class="input_cr area"></textarea>
                        </div>
                        <div class="create_block">
                            <p for="image">Фото:</p>
                            <input type="file" name="image" id="photo" class="input_cr ">
                        </div>
                        <div class="create_block">
                            <input type="submit" name="upload" value="Оставить заявку " class="input_cr input_name">
                        </div>
                    </main>
                </form>
                <h2>Удалить дополнительную услугу</h2>
                <?php
                    require_once 'config.php';

                    $sql = "SELECT * FROM uslugi";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    echo "<table border='1'>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Message</th>
                                <th>Image</th>
                                <th>Delete</th>
                            </tr>";
                    
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["id"] . "</td>
                                <td>" . $row["theme"] . "</td>
                                <td>" . $row["message"] . "</td>
                                <td>" . $row["image"] . "</td>
                                <td><a href='delete_uslugi.php?id=" . $row["id"] . "'>Delete</a></td>
                              </tr>";
                    }


                    echo "</table>";
                } else {
                    echo "0 results";
                }?>
            </div>
            <div class="my-subscriptions">
                <h2>Таблица "Свяжитесь с нами"</h2>
                <?php
                    require_once 'config.php';
                    $sql = "SELECT * FROM contact";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    echo "<table border='1'>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Message</th>
                                <th>Image</th>
                                <th>Delete</th>
                            </tr>";
                    
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["id"] . "</td>
                                <td>" . $row["name"] . "</td>
                                <td>" . $row["email"] . "</td>
                                <td>" . $row["message"] . "</td>
                                <td><a href='delete_contact.php?id=" . $row["id"] . "'>Delete</a></td>
                              </tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }?>
            </div>
            <div class="my-subscriptions">
                <h2>Таблица "отзывов"</h2>
                <?php
                    require_once 'config.php';
                    $sql = "SELECT * FROM reviews";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    echo "<table border='1'>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Review</th>
                                <th>created_at</th> 
                                <th>Delete</th>
                            </tr>";
                    
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["id"] . "</td>
                                <td>" . $row["name"] . "</td>
                                <td>" . $row["email"] . "</td>
                                <td>" . $row["review"] . "</td>
                                <td>" . $row["created_at"] . "</td>
                                <td><a href='delete_review.php?id=" . $row["id"] . "'>Delete</a></td>
                              </tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }?>
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
    




</body>
</html>