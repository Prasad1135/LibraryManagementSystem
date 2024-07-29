<?php
$db = mysqli_connect('localhost','root','','lms');
include('dbcon.php');
$id=$_GET['id'];
mysqli_query($db,"delete from member where member_id='$id'") or die(mysqli_error());
header('location:member.php');
?>