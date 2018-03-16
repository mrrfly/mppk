<?php
include ('connect.php');

$id = (htmlentities($_POST['id']));
$username = (htmlentities($_POST['username']));
$password = (htmlentities($_POST['password']));

$query    = "INSERT INTO admin (id,username,password) VALUES ('$id','$username','$password')";
$runquery = $connect->query($query);

if($runquery->num_rows > 0){
 session_start();
 $_SESSION['username'] = $username;
 header("Location: index.php");
} else {
 echo '<h1>Username atau Kata Sandi Salah!</h1>';
}

?> 