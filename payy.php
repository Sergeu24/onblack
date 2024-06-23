<div class="contactt">
            <h2>Таблица "Свяжитесь с нами"</h2>
            <table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Удалить</th>
                </tr>
                <?php
                require_once 'config.php';

                $sql = "SELECT * FROM contact";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>". $row["id"]. "</td>
                                <td>". $row["name"]. "</td>
                                <td>". $row["email"]. "</td>
                                <td>". $row["message"]. "</td>
                                <td><a href='delete_contact.php' data-id='". $row["id"]. "' class='delete-link'>Удалить</a></td>
                              </tr>";
                    }
                } else {
                    echo "0 results";
                }
               ?>
               <script>
        document.addEventListener("DOMContentLoaded", function() {
            const deleteLinks = document.querySelectorAll(".delete-link");
            deleteLinks.forEach(function(link) {
                link.addEventListener("click", function(event) {
                    event.preventDefault();
                    const id = link.getAttribute("data-id");
                    deleteRow(id);
                });
            });
        });

        function deleteRow(id) {
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "delete_contact.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send("id=" + id);

            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    const row = document.querySelector(`[data-id="${id}"]`).parentNode.parentNode;
                    row.remove();
                }
            };
        }
    </script>
            </table>
            
        </div>
        
        </div>
        
    </div>
       
    </div>
</div>
















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
            <td>" . $row["id"] . "</td>
            <td>" . $row["username"] . "</td>
            <td>" . $row["email"] . "</td>
            <td>" . $row["password"] . "</td>
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
}



?>
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
                <h2>Удалить абонимент</h2>
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
}


?>
                </div>
                <div class="contactt">
            <h2>Таблица "Свяжитесь с нами"</h2>
            <table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Удалить</th>
                </tr>
                <?php
                require_once 'config.php';

                $sql = "SELECT * FROM contact";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>". $row["id"]. "</td>
                                <td>". $row["name"]. "</td>
                                <td>". $row["email"]. "</td>
                                <td>". $row["message"]. "</td>
                                <td><a href='delete_contact.php?id=". $row["id"]. "'></a></td>
                              </tr>";
                    }
                } else {
                    echo "0 results";
                }
               ?>
            </table>
        </div>
        </div>
        
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