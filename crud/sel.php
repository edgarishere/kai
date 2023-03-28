<?php
	$id = $_GET['id'];
	
	$conn = mysqli_connect("localhost","root","","kai");
	$sql="select * from `additem` where `id`='$id'";
	$res=mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($res);
	if(isset($_POST['nitem']))
	{
	$a= $_POST['nitem'];
	$sql1="UPDATE `additem` SET `cnam`='$a' WHERE `id`='$id'";
	$res1=mysqli_query($conn,$sql1);
	header("Location:index.php");
	}
?>

<form method="post">
	<input type="text" name="nitem" value="<?php echo $row['cnam']; ?>">
	<input type="submit" value="submit">
</form>
	