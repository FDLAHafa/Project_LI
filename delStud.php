<html>
<body>
<?php
session_start();
include("dbconn.php");

if(isset($_POST['submit']))		
{	
	$matric_no = $_POST['matric_no'];	

	$sql = "DELETE FROM `student` WHERE `student`.`matric_no` = '$matric_no'";	
	$query = mysqli_query($dbconn, $sql);

	if ($query) {

		echo "Successfull Delete!";
		echo '<a href="rpelajar.php"> Main Page</a>';
		//header("Location: AdminUpdateUser.php");

	} 

	else {

		echo "Error: Cannot Delete!" . mysqli_error($dbconn);

	}
				
}
	mysqli_close($dbconn);
?>					
	</body>
</html>