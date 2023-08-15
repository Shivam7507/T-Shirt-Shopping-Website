<?php
session_start();
header('Location: login.html');

$con = mysqli_connect('localhost', 'root', '', 'cara');

if (!$con) {
    echo "No Connection";
    exit;
}

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$query = "INSERT INTO user_data (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

if (mysqli_query($con, $query)) {
    echo "Form submitted successfully";
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>
