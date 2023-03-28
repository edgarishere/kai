<?php
	$id = $_GET['id'];
	$conn = mysqli_connect("localhost","root","","kai");
	$sql1 ="DELETE FROM `additem` WHERE `id`='$id'";
	$res = mysqli_query($conn ,$sql1);
	header("Location:index.php");
?>