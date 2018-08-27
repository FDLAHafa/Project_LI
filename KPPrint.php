<!DOCTYPE html>
<html>
<head>
  <script>
  function printdiv(printdivname)
    {
    var headstr = "<html><head><title>Summon Details</title></head><body>";
    var footstr = "</body>";
    var newstr = document.getElementById(printdivname).innerHTML;
    var oldstr = document.body.innerHTML;
    document.body.innerHTML = headstr+newstr+footstr;
    window.print();
    document.body.innerHTML = oldstr;
    return false;
    }
  </script>
  <style>
    /* base flex */
    .flexCont
    {
      display: flex;
      flex-wrap: nowrap;
      flex-direction: column;
      width:800px;
      height: auto;
    }
    /*use for end item*/
    .flexItem
    {
      margin: 10px;
      flex-basis: 100%;
    }
    .flexItemBase
    {
      margin: 10px;
    }

    /*flex row */
    .flexRow
    {
      display: flex;
      flex-direction: row;
      flex-basis: 100%
    }
    .flexCol
    {
      display: flex;
      flex-direction: column;
      margin:10px;
    }
  </style>
  <?php
  include("dbconn.php");
  if (isset($_POST["print"]))
  {
    $sql0 = "SELECT * from kp WHERE series_no = ".$_POST['print']."";
    $sql1 = mysqli_query($dbconn,$sql0) or die ("Error: ".mysqli_error($dbconn));
    $data = mysqli_fetch_assoc($sql1);
    $name = $data["name"];
    $matric = $data["matric_no"];
    $ic = $data["mykad_no"];
    $program = $data["prog_code"];
    $date = $data["summon_date"];
    $time = $data["summon_time"];
    $violation = $data["summons"];
    $summon = $data["rm"];
    $appealDate = $data["paybefore"];
  }
  else {echo "fish";  }
  ?>
</head>
<body style="font-family:Calibri; font-size:14;">
  <button id="print" onclick="printdiv('summon');">Print Summon</button>
  <button onclick="location.href = 'rsaman.php'">Back</button>
  <div class="flexCont" id="summon">
    <div class="flexCol">
      <div class="flexRow" style="align-items:center;justify-content:center;">
        <div class="flexItemBase">
          <img src="images\LogoUiTM_(color).jpg" style="width:250px;height:100px">
        </div>
      </div>
    </div>
    <div class="flexCol">
      <div class="flexRow">
        <div class="flexItem">
        &nbsp;&nbsp; Notis Kesalahan Pelajar
        </div>
      <div class="flexRow">
        <div class="flexItem">
          No.c8282882 (temp)
        </div>
      </div>
    </div>
    <div class="flexCol">
      <div class="flexItem" >
        &nbsp;&nbsp;Nama: <?php echo $name; ?>
      </div>
      <div class="flexCol">
        <div class="flexRow">
          <div class="flexItem">
            KP: <?php echo $ic; ?>
          </div>
          <div class="flexItem">
            Matrik: <?php echo $matric;?>
          </div>
          <div class="flexItem">
            Program: <?php echo $program;?>
          </div>
        </div>
      </div>
      <div class="flexCol">
        <div class="flexRow">
          <div class="flexItem">
            Tarikh: <?php echo $date;?>
          </div>
          <div class="flexItem">
            Masa: <?php echo $time; ?>
          </div>
        </div>
      </div>
      <div class="flexCol">
        <div class="flexRow">
          <div class="flexItem">Kesalahan</div>
          <div class="flexItem"><?php echo $violation;?></div>
        </div>
      </div>
      <div class="flexCol">
        <div class="flexItem">
          Kompaun ini hendaklah dijelaskan dalam tempoh 5 hari. Sekiranya tidak dijelaskan dalam tempoh yang ditetapkan, kadar maksimum boleh dikenakan.
          <br><br>Anda boleh manghadirkan diri atau mengaku kesalahan ini dengan surat kepada Pegawai Hal Ehwal Pelajar supaya kesalahan ini boleh di kompaunkan.<p><p>
        </div>
      </div>
      <div class="flexCol">
        <div class="flexRow">
          <div class="flexItem">
                ............................................................................<br>
                Tandatangan Pelapor<br>
                Nama : <p>
                Pihak Berkuasa Tatatertib<br>
                b.p. Pegawai Hal Ehwal Pelajar
          </div>
          <div class="flexItem">
                ............................................................................<br>
                Tandatangan Pelajar
          </div>
        </div>
      </div>
      <div class="flexCol">
        <div class="flexRow">
          <div class="flexItem">
            <label>Dibawah Kaedah 26A(1) Bahagian II, Jadual Kedua Akta 174, kesalahan ini boleh dikenakan kompaun tidak melebihi RM50.00 bagi setiap kesalahan. Anda dikehendaki membayar kompaun sebanyak</label>
            <?php echo $summon;?> sebelum <?php echo $appealDate;?> <label>. Jika kompaun ini tidak dijelaskan pada tarikh tersebut <br>mengikut Kaedah 64, Bahagian V, Jadual Kedua Akta 174(1976), tindakan menggantung dari menjadi pelajar UiTM akan diambil.</label>
          </div>
        </div>
      </div>
      <div class="flexCol">
        <div class="flexRow">
          <div class="flexItem">
            <label>.................................................</label>
            <br><label>Pegawai Hal Ehwal Pelajar</label>
          </div>
          <div class="flexItem">
            <label>.................................................</label><br>
            <label>Tarikh</label>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
