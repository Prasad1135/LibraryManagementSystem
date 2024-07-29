<?php
//mysqli_select_db(mysqli_connect('localhost','root','',lms')or die(mysql_error());
$db = mysqli_connect('localhost','root','','lms');
if($db)
{
	echo "success";
}else{
	die(mysqli_error($db));
}
?>