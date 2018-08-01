<html>
<body>
<?php
session_start();
include("dbconn.php");

if(isset($_POST['submit']))		
{	
 	$matric_no = $_POST['matric_no'];
 	$name = $_POST['name'];
 	$ic_number = $_POST['ic_number'];
 	$address = $_POST['address'];
 	$phone_no = $_POST['phone_no'];
 	$birthdate = $_POST['birthdate'];
 	$gender = $_POST['gender'];

 	$sql0 = "INSERT INTO student(matric_no, name, ic_number, address, phone_no, birthdate, gender) VALUES ('".$matric_no."', '".$name."', '".$ic_number."', '".$address."', '".$phone_no."', '".$birthdate."', '".$gender."' )";

 	$query0 = mysqli_query($dbconn, $sql0) or die ("Error: ".mysqli_error($dbconn)); 

	if ($query0) 
	{
		echo "successfull added";
		//header("Location: AdminInformation.php");
		header("Location: srs.php");
	} 

	else {

		echo "Error: " . mysqli_error($dbconn);

	}
				
}
	mysqli_close($dbconn);
?>					
	</body>
</html>
