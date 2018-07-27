<html>
<body>
<?php
session_start();
include("dbconn.php");

if(isset($_POST['submit']))		
{	
	$summon_date = $_POST['summon_date'];
	$summon_time = $_POST['summon_time'];
	$vehicle_no = $_POST['vehicle_no'];
	$vehicle_type = $_POST['vehicle_type'];
	$summon_place = $_POST['summon_place'];	
	$sticker_no = $_POST['sticker_no'];
	$sesi = $_POST['sesi'];
	$name = $_POST['name'];	
	$matric_no = $_POST['matric_no'];
	$prog_code = $_POST['prog_code'];
	$faculty = $_POST['faculty'];
	$college = $_POST['college'];
	
				
	
	$chkbox = $_POST['summons'];
	$chkbox1 = $_POST['action'];
 
 	$chkNew = "";
 	$chkNew2 = "";	

 	foreach($chkbox as $chkNew1) 
 	{ 
 		$chkNew .= $chkNew1 . ", "; 
 	} 

 	foreach($chkbox1 as $chkNew3) 
 	{ 
 		$chkNew2 .= $chkNew3 . ", "; 
 	} 

	$sql0 = "INSERT INTO ll(summon_date, summon_time, vehicle_no, vehicle_type, summon_place, sticker_no, sesi, summons, name, matric_no, prog_code, faculty, college, action) VALUES ('".$summon_date."','".$summon_time."', '".$vehicle_no."', '".$vehicle_type."', '".$summon_place."', '".$sticker_no."', '".$sesi."', '".$chkNew."', '".$name."', '".$matric_no."', '".$prog_code."', '".$faculty."', '".$college."', '".$chkNew2."')";
	//$sql1 = "INSERT INTO ll(summon_date, summon_time, vehicle_no, vehicle_type, summon_place, sticker_no, sesi, summons, name, matric_no, prog_code, faculty, college, action) VALUES ('".$summon_date."','".$summon_time."', '".$vehicle_no."', '".$vehicle_type."', '".$summon_place."', '".$sticker_no."', '".$sesi."', '".$name."', '".$matric_no."', '".$prog_code."', '".$faculty."', '".$college."')";

	

	if (mysqli_query($dbconn, $sql1)) 
	{
		echo "successfull added";
		//header("Location: AdminInformation.php");
		echo '<a href="LL.php"> Go Back</a>';
	} 

	else {

		echo "Error: " . mysqli_error($dbconn);

	}
				
}
	mysqli_close($dbconn);
?>					
</body>
</html>