<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  	<meta name="description" content="Спортивный комплекс OnBlack">
  	<meta name="keywords" content="OnBlack, спортивный комплекс Ижевск, Фитнес зал">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ONBLACK</title>
</head>
<body>
	<header class="header" id="header">
		<div class="container">
			<div class="header__inner">
				<div  data-scroll="#intro">
				<a href="index.php">
					<img class="header__logo" src="img/1.jpg"  >
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
  	<div class="slider-container">
    	<div class="slide active">
    	  <img src="img/image1.jpg" alt="Slide 1">
		  <div class="slide-caption">ONBLACK</div>
    	  <div class="slide-caption-secondary">Безграничные возможности для тренировок. Становитесь сильнее!</div>
    	</div>
    	<div class="slide">
    	  <img src="img/image2.jpg" alt="Slide 2">
		  <div class="slide-caption">Сила в движении!</div>
    	  <div class="slide-caption-secondary">Один из самых современных спортивных объектов Ижевска.</div>
    	</div>
    	<div class="slide">
    	  <img src="img/image3.jpg" alt="Slide 3">
		  <div class="slide-caption">Девиз</div>
    	  <div class="slide-caption-secondary">Войди в темноту, выйди чемпионом!</div>
    	</div>

    	<div class="prev" onclick="prevSlide()">&#10094;</div>
    	<div class="next" onclick="nextSlide()">&#10095;</div>

    	<div class="dots">
    	  <span class="dot active" onclick="currentSlide(1)"></span>
    	  <span class="dot" onclick="currentSlide(2)"></span>
    	  <span class="dot" onclick="currentSlide(3)"></span>
    	</div>
  	</div>
  	<script>
  	  let slideIndex = 1;
  	  showSlides(slideIndex);

  	  function nextSlide() {
  	    showSlides(slideIndex += 1);
  	  }

  	  function prevSlide() {
  	    showSlides(slideIndex -= 1);
  	  }

  	  function currentSlide(n) {
  	    showSlides(slideIndex = n);
  	  }

  	  function showSlides(n) {
  	    let slides = document.getElementsByClassName("slide");
  	    let dots = document.getElementsByClassName("dot");

  	    if (n > slides.length) { slideIndex = 1 }
  	    if (n < 1) { slideIndex = slides.length }

  	    for (let i = 0; i < slides.length; i++) {
  	      slides[i].classList.remove("active");
  	    }

  	    for (let i = 0; i < dots.length; i++) {
  	      dots[i].classList.remove("active");
  	    }

  	    slides[slideIndex - 1].classList.add("active");
  	    dots[slideIndex - 1].classList.add("active");
  	  }
  	</script>
	


	<div class="containe">
		<h1>Мы предлагаем</h1>
		<div class = "row">
  			<div class="card">
    			<img src="img/v1.png" alt="Basketball">
   				<h3>Баскетбол</h3>
  			</div>
  			<div class="card">
  			  	<img src="img/v2.png" alt="Gym">
  			  	<h3>Тренажерный зал</h3>
  			</div>
  			<div class="card">
  			  	<img src="img/v3.png" alt="Archery">
  			  	<h3>Стрельба из лука</h3>
  			</div>
  			<div class="card">
  			  	<img src="img/v4.png" alt="Cycling">
  			  	<h3>Велоспорт</h3>
  			</div>
  			<div class="card">
  			  	<img src="img/v5.png" alt="Yoga">
  			  	<h3>Йога</h3>
  			</div>
  			<div class="card">
  			  	<img src="img/v6.png" alt="Football">
  			  	<h3>Футбол</h3>
  			</div>
		</div>
	</div>
	<section id="contact">
  <h2>Свяжитесь с нами</h2>
  <p>Свяжитесь с нами для получения дополнительной информации о нашем спортивном комплексе и вариантах абонемента.</p>
  <form id="contact-form">
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="message">Описание:</label>
    <textarea id="message" name="message" required></textarea>
    <input type="submit" value="Отправить" class="button">
  </form>
  <div id="response"></div>

  <script>
    const form = document.getElementById('contact-form');
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const formData = new FormData(form);
      fetch('process.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.text())
      .then((message) => {
        document.getElementById('response').innerHTML = message;
      })
      .catch((error) => {
        console.error('Error:', error);
      });
    });
  </script>
</section>

	<div class="map">
		<h1 class="mapp">Где нас найти</h1>
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af9f315b483f4f16e64ef9574209d83f54ab4598e11f1c25d0fe8b2100b22aabd&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
	</div>

  <section id="testimonials">
  <div class="containeer">
    <h2>Отзывы наших клиентов</h2>
    <div class="testimonials-slider">
      <div class="testimonial-item">
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

// Retrieve reviews from database
$sql = "SELECT name, review, created_at FROM reviews ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='testimonial-item'>";
        echo "<p class='testimonial-text'>". $row["review"]. "</p>";
        echo "<p class='testimonial-author'>- ". $row["name"]. "</p>";
        echo "</div>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
  </div>
</section>
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
<style>

#testimonials {
  background-color: #f7f7f7;
  padding: 40px 0;
  text-align: center;
}

#testimonials h2 {
  color: #333;
  margin-bottom: 30px;
}

.testimonials-slider {
  display: flex;
  flex-direction: column;
}

.testimonial-item {
  background-color: white;
  border: 1px solid #ddd;
  padding: 20px;
  margin-bottom: 20px;
  border-radius: 10px;
}

.testimonial-text {
  font-style: italic;
  color: #555;
}

.testimonial-author {
  text-align: right;
  color: #666;
  margin-top: 10px;
  font-weight: bold;
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

a {
  color: #fff; /* белый текст ссылок */
  text-decoration: none; /* удаление подчеркивания ссылок */
}

a:hover {
  color: #ccc; /* серый текст ссылок при наведении */
}

/* Мы предлагаем */
	.containe{
 
  margin: 40px auto;
  text-align: center;
}

.row {
  display: flex;
  flex-wrap: wrap;
	justify-content: space-between;
}

.card {
  flex-basis: 30%;
  margin: 10px;
  text-align: center;
}

.card img {
  width: 300px;
  height: 300px;
  object-fit: cover;
  border-radius: 10px;
}

.card h3 {
  margin-top: 10px;
}
	
/* Слайдер */

   .slider-container {
      position: relative;
      width: 100%;
      height: 400px;
      overflow: hidden;
      border-radius: 20px; 
    }

   .slide {
      display: none;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      transition: opacity 0.5s ease-in-out;
    }

   .slide.active {
      display: block;
      opacity: 1;
    }

   .slide img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 20px; 
    }

   .prev,
   .next {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      color: white;
      padding: 10px 20px;
      cursor: pointer;
      z-index: 1;
      border-radius: 20px;
    }

   .prev {
      left: 20px;
    }

   .next {
      right: 20px;
    }

   .dots {
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      justify-content: center;
      z-index: 1;
    }

   .dot {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background-color: rgba(255, 255, 255, 0.5);
      margin: 0 5px;
      cursor: pointer;
    }

   .dot.active {
      background-color: white;
    }
	.slide-caption {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 18px;
  font-weight: bold;
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
  text-align: center;
}

.slide-caption-secondary {
  position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 14px;
  font-weight: normal;
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
  text-align: center;
} 	

/* Шапка сайта */
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


#contact {
	margin: 2rem 0;
	background-color: #f5f5f5;
	padding: 1.5rem;
	border-radius: 50px;
	border: 1px solid #ddd;
  }
  
  #contact h2 {
	margin-top: 0;
	color: #000000;
  }
  
  #contact p {
	color: #000000;
  }
  
  #contact form {
	display: flex;
	flex-direction: column;
  }
  
  #contact label {
	color: #000000;
  }
  
  #contact input,
  #contact textarea {
	margin-bottom: 0.5rem;
	padding: 0.5rem;
	border-radius: 50px;
	border: 1px solid #ddd;
  }
  
  
  
  #contact input[type="submit"] {
	align-self: center;
	padding: 0.5rem 2rem;
	background-color: #5ec0ea;
	color: white;
	border: none;
	border-radius: 5px;
	cursor: pointer;
  }
  
  #contact input[type="submit"]:hover {
	background-color: #5ec0ea;
  }
  
  .mapp {
	text-align: center;
	color: #000000;
	font-size: 30px;
  }
  
</style>
</html>