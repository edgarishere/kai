
<form action="" method="post">

    <input type="text" placeholder="enter cs" name="cs" >
	<input type="submit" value="submit">
	
</form>

<?php 

if(isset($_POST['cs']))    
{
     $a = $_POST['cs'];
	$conn = mysqli_connect("localhost","root","","kai");
	$sql="insert into `additem` (`cnam`) values ('$a')";
	$res=mysqli_query($conn,$sql);
	$sql1 = "select * from `additem`";
	$res1=mysqli_query($conn,$sql1);
	?>
	<table border="1">
	<tr>
		<td> sub
		<td> edit
		<td> del
	<?php
	while($row = mysqli_fetch_assoc($res1))
	{
		echo "<tr><td>";
			echo $row['cnam']."<br>";
		?>
			<td><a href="sel.php?id=<?php echo $row['id']; ?>">select </a>
			<td><a href="del.php?id=<?php echo $row['id']; ?>">delete </a>
		
		<?php
	}
}
?>

</table>