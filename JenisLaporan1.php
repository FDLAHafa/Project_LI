<html>
    <body>
    <?php
        session_start();
        include("dbconn.php");
        if(isset($_POST['submit']))
        {
            $laporan = $_POST['laporan'];
            if ($laporan == "Kad Pelajar")
            {
                //echo "successfull added";
                header("Location: kadpelajar.php");
            }
            else
            {
                //echo "Failed";
                header("Location: barang.php");
            }
        }
        mysqli_close($dbconn);
    ?>
	</body>
</html>
