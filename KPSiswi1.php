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
	$count = count($chkbox);
	$rm = "";
	
 
 	$chkNew = "";			
 	foreach($chkbox as $chkNew1) 
 	{ 
 		$chkNew .= $chkNew1 . ", "; 
 	} 

 	$rm = ($count * 50) - 50;

	$sql0 = "INSERT INTO kp(gender, name, matric_no, mykad_no, prog_code, summon_date, summon_time, summon_place, summons, rm) VALUES ('Siswi', '".$name."', '".$matric_no."', '".$mykad_no."', '".$prog_code."', '".$summon_date."', '".$summon_time."', '".$summon_place."', '".$chkNew."', '".$rm."')";
	//$sql1 = "INSERT INTO spbur (MultipleValue) VALUES ('$chkNew')";

	

	if (mysqli_query($dbconn, $sql0)) 
	{
		echo "The Default Amount To Be Pay are RM".$rm."";
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