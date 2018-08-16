<?php
include ("dbconn.php");
if (isset($_POST['submit']))
{

  //FIR variables
  $name =   $_POST['name'];
  $kp =     $_POST['mykad'];
  $matric = $_POST['matric_no'];
  $course = $_POST['prog_code'];
  $faculty = $_POST['faculty'];
  $collAddress = $_POST['address'];
  $missDate = $_POST['missDate'];
  $missTime = $_POST['missTime'];
  $missPlace = $_POST['missPlace'];
  $missItem = $_POST['missItem'];
  $report = $_POST['report'];

  //FIR insert statement
  $sql1 = "INSERT INTO complain (complainName, complainIC, complainMatric, course, faculty, collegeAddress, missDate, missTime, missPlace, missItem, report)
  VALUES ('".$name."', '".$kp."', '".$matric."', '".$course."', '".$faculty."', '".$collAddress."', '".$missDate."', '".$missTime."', '".$missPlace."', '".$missItem."', '".$report."')";

  $run1 = mysqli_query($dbconn,$sql1) or die ("Error: ".mysqli_error($dbconn));
  /*$rows1 = mysqli_num_rows($run1);*/
  if ($run1)
  {
    echo "<script type='text/javascript'>
          alert('Report Successfull');
          setTimeout(window.location='fir.php',2000);
          </script>";
  }
  else
  {
    /*echo "<script type='text/javascript'>
          alert('Problem with report');
          setTimeout(window.location='fir.php',2000);
          </script>";*/
  }
}

?>
