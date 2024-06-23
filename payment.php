<?php

$db = mysqli_connect("localhost", "k92972ks_onblack", "33*ONBLACk", "k92972ks_onblack");

// Check connection
if (!$db) {
    die("Connection failed: ". mysqli_connect_error());
}
// Get the posted values
if (isset($_POST['buy'])) {
    $id = $_POST['buy'];
    // Retrieve the image details from the database based on the $id
    $query = "SELECT * FROM aboniment WHERE id = '$id'";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);

    $image = $row['image'];
    $theme = $row['theme'];
    $message = $row['message'];
    $price = $row['price'];

    // Display the payment page
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>Оплата абонимента</title>
	<meta charset="UTF-8">
	<style>
		body {
			font-family: Arial, sans-serif;
		}
		.container {
			width: 80%;
			margin: 40px auto;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		.form-group {
			margin-bottom: 20px;
		}
		.label {
			display: block;
			margin-bottom: 10px;
		}
		.input {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}
		.button {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		.button:hover {
			background-color: #3e8e41;
		}
		.image {
			width: 200px;
			height: 200px;
			margin: 20px;
			border-radius: 10px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Оплата абонимента</h2>
		<form action="/payment" method="post">
			<img src="images/<?php echo $image; ?>" alt="<?php echo $theme; ?>" class="image">
			<h3>Название: <?php echo $theme; ?></h3>
			<p>Описание: <?php echo $message; ?></p>
			<p>Цена: <?php echo $price; ?></p>
            
			<h3>Введите данные карты</h3>
			<div class="form-group">
				<label class="label" for="card_number">Номер карты:</label>
				<input type="text" id="card_number" class="input" required>
			</div>
			<div class="form-group">
				<label class="label" for="expiration_date">Срок действия:</label>
				<input type="text" id="expiration_date" class="input" required>
			</div>
			<div class="form-group">
				<label class="label" for="cvv">CVV:</label>
				<input type="text" id="cvv" class="input" required>
			</div>
			<div class="form-group">
				<label class="label" for="amount">Сумма оплаты:</label>
				<input type="number" id="amount" class="input" value="<?php echo $price; ?>" required>
			</div>
			<button class="button" type="submit">Оплатить</button>
		</form>
	</div>
</body>
</html>

    <?php
} else {
    echo "Error: No image selected";
}

?>