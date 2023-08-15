<?php
session_start();
echo "Succesfully Loged In";
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
    $_SESSION['username']=$name;
    header('location:index.html');
} 
else {
    header('location:login.html');
}
?>
