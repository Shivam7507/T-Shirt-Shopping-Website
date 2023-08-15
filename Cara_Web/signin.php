<?php
session_start();
header('location:login.html');
$con = mysqli_connect('localhost', 'root');

if ($con) {
    echo " ";
} 
else {
    echo "No Connection";
}

mysqli_select_db($con, 'cara');
$name = $_POST['email'];
$pass = $_POST['password'];

$query = "SELECT * FROM `user-data` WHERE username = '$name' AND password = '$pass'";
$result = mysqli_query($con, $query);
$num = mysqli_num_rows($result);

if ($num == 1) {
    echo "Duplicate Data";
} 
else {
    $query = "INSERT INTO `user-data` (username, password) VALUES ('$name', '$pass')";
    mysqli_query($con, $query);
    echo "Signup Successful";
}
?>
