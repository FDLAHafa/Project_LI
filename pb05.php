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
    .gridcont {
      display: grid;
      grid-template-columns: 375px 375px;
    }
    .grid-item {}
    .flexCont {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
    }
    .flexItem{
      flex-basis: 50%;
      flex-grow: 1;
    }

    .whitespace {
      display: grid;
      grid-template-rows: 350px 250px auto auto;
    }
    .wsitem {}

    td,th{
      border-left: 2px solid grey;
      border-right: 2px solid grey;
    }
    tr{
        border-bottom:  2px solid black;
        border-top: 2px solid black;
    }
    .main{
      font-family: Calibri;
      font-size: 15;
    }
    </style>

    <?php
    include("dbconn.php");
    if (isset($_POST['printrfir']))
    {
      $sql0 = "SELECT * from complain WHERE series_no = ".$_POST['printrfir']."";
      $sql1 = mysqli_query($dbconn,$sql0) or die ("Error: ".mysqli_error($dbconn));
      $data = mysqli_fetch_assoc($sql1);
      $name = $data['name'];
      $kp = $data['ic_number'];
      $matric = $data['matric_no'];
      $course = $data['course_code'];
      $faculty = $data['faculty'];
      $college = $data['address'];
      $lostDate = $data['missDate'];
      $lostTime = $data['missTime'];
      $lostPlace = $data['missPlace'];
      $lostReport = $data['report'];
      $lostItem = $data['missItem'];
      $reportDate = date("d/m/Y");
    }
      ?>
  </head>
  <body style="font-family:Calibri; font-size:14;">
    <button id="print" onclick="printdiv('print_pb05');">Print Summon</button>
    <button onclick="location.href = 'rfir.php'">Back</button>
    <div id="print_pb05">
      <div id="table_header">
        <table style = "background-color: rgb(234,241,221);border-collapse: collapse" width = "700" >
        <tbody>
          <tr>
            <td>
              <img src="images/PDRM_Logo.jpg" style="width:150px;height:150px;border:0;" align = "center" >
            </td>
            <td style= "font-family:calibri; font-weight:bold" rowspan="2" align = "center" width = "400">
              PEJABAT POLIS BANTUAN<p>Aduan Kehilangan Barang<br>Persendirian / UiTM
            </td>
            <td>
              <img src="images/Lencana_PB_UiTM.jpg" style="width:150px;height:150px;border:0;" align = "center" >
            </td>
          </tr>
          <tr>
          <td style = "border-top: 2px solid black; font-family:calibri; font-weight:bold; font-size: 16;" align = "center">
            UiTM Raub
          </td>
          <td style = "border-top: 2px solid black ;font-family:calibri; font-weight:bold; font-size: 16;" align = "center">
            PB 05
          </td>
        </tr>
      </table>
      </div><p>
      <div class="whitespace">
        <div class="wsitem">
        Nama                :<?php echo $name;?><br>
        No. Kad Pengenalan  :<?php echo $kp;?><br>
        No. KP UiTM         :<?php echo $matric;?><br>
        Kursus/Jawatan      :<?php echo $course;?><br>
        Fakulti/Bahagian    :<?php echo $faculty;?><br>
        Alamat/Kolej        :<?php echo $college;?><br>
        <div class="gridcont">
        <div class="grid-item">Tarikh Hilang       :<?php echo $lostDate;?></div>                     <div class="grid-item">Masa :<?php echo $lostTime;?></div><br>
        </div>
        Tempat Kehilangan   :<?php echo $lostPlace;?><p>

        1.  Saya nama yang tersebut di atas ingin membuat laporan iaitu <br>
            &emsp;saya telah kehilangan barang-barang yang berikut :<br>
            <div class="gridcont">
              <div class="grid-item">
                <?php echo $lostItem; ?>
              </div>
          </div>
          <p>
        2.	Laporan ringkas bagaimana kehilangan berlaku.<p></div>
            <div class="wsitem"><?php echo $lostReport;?></div>
<div class="wsitem">
<pre class="main">
Sekian.

Tandatangan Pengadu                             Tandatangan Penerima Aduan



.............................................	             ..............................................
                                	                             (                                                  )




Bertarikh ...............................
</pre>
</div>
      </div>
      <div class="wsitem">
        <table style = "border-collapse: collapse" width = "700" >
          <tr>
            <td>
              Keluaran :
            </td>
            <td>
              Pindaan :
            </td>
            <td>
              Tarikh : <?php echo $reportDate;?>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </body>
</html>
