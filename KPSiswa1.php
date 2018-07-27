<html>
<body>
<?php
session_start();
include("dbconn.php");

if(isset($_POST['submit']))
{
	$name = $matric_no = $mykad_no = $prog_code = $summon_date = $summon_time = $summon_place = NULL;

	$staff_id = $_SESSION['staff_ID'];
	$name = $_POST['name'];
	$matric_no = $_POST['matric_no'];
	$mykad_no = $_POST['mykad_no'];
	$prog_code = $_POST['prog_code'];
	$summon_date = $_POST['summon_date'];
	$summon_time = $_POST['summon_time'];
	$summon_place = $_POST['summon_place'];
	$chkbox = $_POST['summons'];

	$sqlCheck = "SELECT * FROM student where matric_no = '$matric_no'";
	$sqlStudData = "INSERT INTO student (matric_no,name,mykad_no,prog_code) VALUES ('$matric_no','$name','$mykad_no','$prog_code')";
	$sqlChkRun = mysqli_query($dbconn,$sqlCheck);
	if (mysqli_num_rows($sqlChkRun) == 0)
	{
		mysqli_query($dbconn,$sqlStudData);
	}

 	foreach($chkbox as $chkNew1)
 	{
		$sqlIn = "INSERT INTO summon(fault_id,traffic_id,matric_no,staff_id,series_no,summon_date,summon_time,summon_place) values('$chkNew1',NULL,'$matric_no','$staff_id','bsaac332','$summon_date','$summon_time','$summon_place')";

		mysqli_query($dbconn,$sqlIn) or die("Error: " . mysqli_error($dbconn));
 	}

	//$sql0 = "INSERT INTO kp(name, matric_no, mykad_no, prog_code, summon_date, summon_time, summon_place,summons) VALUES ('".$name."', '".$matric_no."', '".$mykad_no."', '".$prog_code."', '".$summon_date."', '".$summon_time."', '".$summon_place."', '".$chkNew."')";
	//$sql1 = "INSERT INTO spbur (MultipleValue) VALUES ('$chkNew')";



	if (mysqli_query($dbconn, $sqlIn))
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
