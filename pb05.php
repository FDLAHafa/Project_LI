<html>
  <head>
    <style>
    .gridcont {
      display: grid;
      grid-template-columns: 375px 375px;
    }
    .grid-item {}

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
        Nama                :<?php?><br>
        No. Kad Pengenalan  :<?php?><br>
        No. KP UiTM         :<?php?><br>
        Kursus/Jawatan      :<?php?><br>
        Fakulti/Bahagian    :<?php?><br>
        Alamat/Kolej        :<?php?><br>
        <div class="gridcont">
        <div class="grid-item">Tarikh Hilang       :<?php?></div>                     <div class="grid-item">Masa :<?php?></div><br>
        </div>
        Tempat Kehilangan   :<?php?><p>

        1.  Saya nama yang tersebut di atas ingin membuat laporan iaitu <br>
            &emsp;saya telah kehilangan barang-barang yang berikut :<br>
            &emsp;(Tuliskan jumlah wang/anggaran dan nombor kad yang hilang sekiranya berkaitan):-<br>
            <div class="gridcont">
              <div class="grid-item">A) <?php?></div> <div class="grid-item">D) <?php?></div>
              <div class="grid-item">B) <?php?></div> <div class="grid-item">E) <?php?></div>
              <div class="grid-item">C) <?php?></div> <div class="grid-item">F) <?php?></div>
          </div>
          <p>
        2.	Laporan ringkas bagaimana kehilangan berlaku.<p></div>
            <div class="wsitem"><?php?></div>
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
              Tarikh : <?php?>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </body>
</html>
