<?php
$db = mysqli_connect('localhost','root','','lms');
include('dbcon.php');

$id=$_GET['id'];

mysqli_query($db,"delete from users where user_id='$id'") or die(mysqli_error());

header('location:users.php');
?>