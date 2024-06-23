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

    header("Location: index.php");
    exit;
}
?>

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name" required><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    <label for="review">Отзыв:</label>
    <textarea id="review" name="review" required></textarea><br><br>
    <input type="submit" value="Отправить отзыв">
</form>

