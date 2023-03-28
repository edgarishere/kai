<?php
	$conn = mysqli_connect("localhost","root","","test2");
		$nm = $_POST['cs'];
		$gen = $_POST['rd'];
		$checkBox = implode(',', $_POST['Days']);
				if(isset($_POST['Days']))
					{       
						$query="INSERT INTO `user` (`name`,`hobby`,`gender`) VALUES ('$nm','" . $checkBox . "','$gen')";     
						$result= mysqli_query($conn,$query);
					
					}
	/*
		db name = test2
		table nm= user
		column 
		1. id
		2. name
		3.hobby
		4.gender
	*/
?>

<form method="Post">
	<input type="text" placeholder="enter name" name="cs" >
	
	<input type="checkbox" name="Days[]" value="idk">idk<br>
	<input type="checkbox" name="Days[]" value="read">read<br>
	<input type="checkbox" name="Days[]" value="dance">dance<br>

	<input type="radio" name="rd" value="male" checked>male<br> 
    <input type="radio" name="rd" value="female">female


	<input type="submit" value="submit">


</form>