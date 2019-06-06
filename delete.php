<?php
require_once('connect.php');
$id = $_GET['id'];//PHP $_GET can also be used to collect form data after submitting an HTML form with method="get".
//$_GET can also collect data sent in the URL.
$DelSql = "DELETE FROM `project` WHERE id=$id";
$res = mysqli_query($connection, $DelSql);
if($res){
	header('location: view.php');
}else{
	echo "Failed to delete";
}
?>