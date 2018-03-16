<?php

$host  = 'localhost';
$user  = 'root';
$pass = '';
$db    = 'mppk';

$connect = new mysqli($host, $user, $pass, $db);
if($connect->connect_error){
 echo ('Terjadi Kesalahan'.$connect ->connect_error);
}

?> 
