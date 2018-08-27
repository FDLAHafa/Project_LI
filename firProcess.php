<?php
include ("dbconn.php");
if (isset($_POST['submit']))
{

  //FIR variables
  $name =   $_POST['name'];
  $ic_number = $_POST['ic_number'];
  $matric_no = $_POST['matric_no'];
  $course_code = $_POST['course_code'];
  $faculty = $_POST['faculty'];
  $address = $_POST['address'];
  $phone_no = $_POST['phone_no'];
  $missDate = $_POST['missDate'];
  $missTime = $_POST['missTime'];
  $missPlace = $_POST['missPlace'];
  $missItem = $_POST['missItem'];
  $report = $_POST['report'];

  //FIR insert statement
  $sql1 = "INSERT INTO complain (name, ic_number, matric_no, course_code, faculty, address, phone_no, missDate, missTime, missPlace, missItem, report)
  VALUES ('".$name."', '".$ic_number."', '".$matric_no."', '".$course_code."', '".$faculty."', '".$address."', '".$phone_no."', '".$missDate."', '".$missTime."', '".$missPlace."', '".$missItem."', '".$report."')";

  $run1 = mysqli_query($dbconn,$sql1) or die ("Error: ".mysqli_error($dbconn));
  /*$rows1 = mysqli_num_rows($run1);*/
  if ($run1)
  {
    echo "<script type='text/javascript'>
          alert('Report Successfull Upload');
          setTimeout(window.location='fir.php',2000);
          </script>";
  }
  else
  {
    echo "<script type='text/javascript'>
          alert('Problem with report');
          setTimeout(window.location='fir.php',2000);
          </script>";
  }
}

?>
