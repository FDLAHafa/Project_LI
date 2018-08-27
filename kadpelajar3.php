<html>
<body>
<?php
session_start();
include("dbconn.php");

if(isset($_POST['submit']))		
{	
	$currentdate =$_POST['currentdate'];
	$matric_no = $_POST['matric_no'];
	$name = $_POST['name'];
	$prog_code = $_POST['prog_code'];
	$faculty = $_POST['faculty'];
	$address = $_POST['address'];
	$phone_no =$_POST['phone_no'];
	$validuntil =$_POST['validuntil'];
	$refer = $_POST['refer'];


	$sql0 = "INSERT INTO kad (currentdate, matric_no, name, prog_code, faculty, address, phone_no, validuntil, refer)VALUES('".$currentdate."', '".$matric_no."', '".$name."', '".$prog_code."', '".$faculty."', '".$address."', '".$phone_no."', '".$validuntil."', '".$refer."')";
	
	$query0 = mysqli_query($dbconn, $sql0) or die ("Error: ".mysqli_error($dbconn));


	if ($query0)
	{
		echo "<script type='text/javascript'>
          alert('Sucessfull Submit!');
          setTimeout(window.location='kadpelajar.php',2000);
          </script>";
	} 

	else {

		echo "<script type='text/javascript'>
          alert('Error! Cannot submit.');
          setTimeout(window.location='kadpelajar.php',2000);
          </script>";

	}
				
}
	mysqli_close($dbconn);
?>					
	</body>
</html>