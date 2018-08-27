<html>
  <head>
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
      $i = 0;
      $name = 'a';
      $kp ='b';
      $matric ='c';
      $course ='d';
      $faculty ='e';
      $college ='f';
      $lostDate ='g';
      $lostTime ='h';
      $lostPlace ='i';
      $lostReport ='j';
      $reportDate ='k';
      $itemCount = 0;
      foreach ()
      {
          $lostArr = array('<div class="flexItem">'.$itemCount.') '.$.'</div>');
      }
      $lostArr = array();
      //<div class="flexItem">A) </div> <div class="flexItem">D) </div>
     ?>
  </head>
  <body>
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
              <div class="flexCont">
                <?php
                  foreach ($lostArr as $lostItem) {
                    echo $lostItem;
                  }
                ?>
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
