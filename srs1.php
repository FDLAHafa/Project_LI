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
 	$course_code = $_POST['course_code'];
 	$faculty = $_POST['faculty'];
 	$address = $_POST['address'];
 	$phone_no = $_POST['phone_no'];
  $BDPH = $_POST['birthdate'];
  $bd = date_create_from_format('d-m-Y',$BDPH);
 	$birthdate = date_format($bd,'Y-m-d');
 	$gender = $_POST['gender'];

 	$sql0 = "INSERT INTO student(matric_no, name, ic_number, course_code, faculty, address, phone_no, birthdate, gender) VALUES ('".$matric_no."', '".$name."', '".$ic_number."', '".$course_code."', '".$faculty."', '".$address."', '".$phone_no."', '".$birthdate."', '".$gender."' )";

 	$query0 = mysqli_query($dbconn, $sql0) or die ("Error: ".mysqli_error($dbconn));

	if ($query0)
	{
		echo "<script type='text/javascript'>
          alert('Successfull Register');
          setTimeout(window.location='srs.php',2000);
          </script>";
	}

	else {

		echo "Error: " . mysqli_error($dbconn);

	}

}
	mysqli_close($dbconn);
?>
	</body>
</html>
