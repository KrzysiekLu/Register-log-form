
<?php 


$servername = "localhost"; // Nazwa serwera
$username = "root"; // Nazwa użytkownika
$password = ""; // Hasło
$dbname = "xxx"; // Nazwa bazy danych

// Nawiązanie połączenia
$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzenie połączenia
if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {

$name = $_POST['name'];
$lastName = $_POST['lastName'];
$bDate = $_POST['b-date'];
$email = $_POST['email'];
$userPassword = $_POST['password'];
$form_submitted = false;


$send  = "INSERT INTO reg (reg_name, reg_last_name, reg_b_date, reg_email, reg__password) VALUES ('$name', '$lastName', '$bDate', '$email', '$userPassword')";

if ($conn->query($send) === TRUE) {
    echo "Dane zostały zapisane w bazie danych.";
    $form_submitted = true;
} else {
    echo "Błąd: " . $conn->error;
}
}
$conn->close();

if (!isset($form_submitted) || !$form_submitted) {
    include('src/templates/index.html'); // Wyświetlanie formularza, jeśli formularz nie został jeszcze wysłany
}

?>