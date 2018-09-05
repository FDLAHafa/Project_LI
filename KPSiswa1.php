<html>
<body>
<?php
session_start();
include("dbconn.php");

if(isset($_POST['submit']))		
{	
	$name = $_POST['name'];	
	$matric_no = $_POST['matric_no'];
	$mykad_no = $_POST['ic_number'];
	$prog_code = $_POST['course_code'];
	$summon_date = $_POST['summon_date'];
	$summon_time = $_POST['summon_time'];			
	$summon_place = $_POST['summon_place'];	
	$chkbox = $_POST['summons'];
	$rm = $_POST['rm'];
	$paybefore = $_POST['paybefore'];
 
 	$chkNew = "";			
 	foreach($chkbox as $chkNew1) 
 	{ 
 		$chkNew .= $chkNew1 . "."; 
 	} 

	$sql0 = "INSERT INTO kp(gender, name, matric_no, mykad_no, prog_code, summon_date, summon_time, summon_place, summons, rm, paybefore) VALUES ('Siswa', '".$name."', '".$matric_no."', '".$mykad_no."', '".$prog_code."', '".$summon_date."', '".$summon_time."', '".$summon_place."', '".$chkNew."', '".$rm."', '".$paybefore."')";
	//$sql1 = "INSERT INTO spbur (MultipleValue) VALUES ('$chkNew')";

	

	if (mysqli_query($dbconn, $sql0)) 
	{
		echo "<script type='text/javascript'>
          alert('Successful');
          setTimeout(window.location='KPCheck.php',2000);
          </script>";
	} 

	else {
		echo "<script type='text/javascript'>
          	alert('An Error Occur');
          	setTimeout(window.location='KPCheck.php',2000);
          	</script>";
		echo "Error: " . mysqli_error($dbconn);

	}
				
}
	mysqli_close($dbconn);
?>					
	</body>
</html>