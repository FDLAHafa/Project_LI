<html>
<body>
<?php
session_start();
include("dbconn.php");

if(isset($_POST['submit']))		
{	
	$name = $_POST['name'];	
	$matric_no = $_POST['matric_no'];
	$mykad_no = $_POST['mykad_no'];
	$prog_code = $_POST['prog_code'];
	$summon_date = $_POST['summon_date'];
	$summon_time = $_POST['summon_time'];			
	$summon_place = $_POST['summon_place'];	
	$chkbox = $_POST['summons'];
	$rm = $_POST['rm'];
	$paybefore = $_POST['paybefore'];
 
 	$chkNew = "";			
 	foreach($chkbox as $chkNew1) 
 	{ 
 		$chkNew .= $chkNew1 . ", "; 
 	} 

	$sql0 = "INSERT INTO kp(gender, name, matric_no, mykad_no, prog_code, summon_date, summon_time, summon_place, summons, rm, paybefore) VALUES ('Siswa', '".$name."', '".$matric_no."', '".$mykad_no."', '".$prog_code."', '".$summon_date."', '".$summon_time."', '".$summon_place."', '".$chkNew."', '".$rm."', '".$paybefore."')";
	//$sql1 = "INSERT INTO spbur (MultipleValue) VALUES ('$chkNew')";

	

	if (mysqli_query($dbconn, $sql0)) 
	{
		echo "successfull added";
		//header("Location: AdminInformation.php");
		echo '<a href="KPSiswa.php"> Go Back</a>';
	} 

	else {

		echo "Error: " . mysqli_error($dbconn);

	}
				
}
	mysqli_close($dbconn);
?>					
	</body>
</html>