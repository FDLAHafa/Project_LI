<html>
<body>
	<?php
	include("dbconn.php");
	if(isset($_POST['signup']))
	{
		$staff_ID = $_POST['staff_ID'];
		$pass_word = $_POST['pass_word'];

		$sql0 = "SELECT staff_id ,pass_word FROM urstaff WHERE staff_id = '$staff_ID' AND pass_word = '$pass_word'";
		$query0 = mysqli_query($dbconn, $sql0) or die ("Error: ".mysqli_error($dbconn));
		$row0 = mysqli_num_rows($query0);
		if($row0 != 0){
			echo "Record already exists";
			echo "<p>";
	}

	else{
		//execute SQL INSERT Command
		$sql2 = "INSERT INTO urstaff (staff_ID ,pass_word) VALUES ('".$staff_ID."', '".$pass_word."')";
		mysqli_query($dbconn, $sql2) or die ("Error: " . mysqli_error($dbconn));
		//Display A Message
		echo "Data has been saved";
		echo "<p>";
	}//close if isset()

	}

	//close db connection
	mysqli_close($dbconn);
	?>
</body>
<a href="index.html">Log In Again.</a><br>
</html>
