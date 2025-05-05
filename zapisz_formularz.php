<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "formularz"; // Twoja baza danych

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}

$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$message = $conn->real_escape_string($_POST['message']);

$sql = "INSERT INTO kontakt (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Dziękujemy za wiadomość!";
} else {
    echo "Błąd: " . $conn->error;
}

$conn->close();
?>
