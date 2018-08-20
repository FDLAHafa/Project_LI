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
</head>
<body style="font-family:Calibri; font-size:14;">
  <button id="print" onclick="printdiv('matric');">Print</button>
  <div id="matric">
    <div class="flexCont">
      <div class="flexCol">
        <div class="flexRow" style="align-items:center;justify-content:center;">
          <div class="flexItem">
            <img src="images\LogoUiTM_(color).jpg" style="width:250px;height:100px">
          </div>
          <div class="flexItem">
            <b>PEJABAT POLIS BANTUAN<br>UNIVERSITI TEKNOLOGI MARA (PAHANG)<br><br>
            <u>GANTIAN KAD PELAJAR</u></b>
          </div>
          <div class="flexItem">
            <img src="images\Lencana_PB_UiTM.jpg" style="width:100px;height:100px">
          </div>
        </div>
      </div>
      <div class="flexCol">
        <div class="flexItem" style="justify-content:flex-end">
          No.c8282882 (temp)
        </div>
      </div>
        <div class="flexCol">
          <div class="flexItem">
            Tarikh...............
          </div>
        </div>
    </div>
        <div>
          <p>Kepada sesiapa yang berkenaan</p>
          <p>Nama Pelajar <?php ?></p>
          <p>No Pelajar UiTM / Kad Pengenalan <?php ?></p>
          <p>Kursus <?php ?></p>
          <p>Fakulti  <?php ?></p>
          <p>Alamat Kolej Kediaman <?php ?></p>
          <p>No Telefon <?php ?></p>

          <p>Adalah disahkan bahawa <b>Kad Pelajar</b> yang tersebut diatas:-</p>
          <p>1.Telah ditahan sementara untuk kesalahan tatatertib.</p>
          <p>2.Telah kehilangan dan menunggu penggantian. Salinan ini sah sehingga <?php ?></p>
          <p>Terima kasih.</p>

          <pre style="font-family:Calibri">
Yang menjalankan tugas,



.........................................
(                                       )
          </pre>
          <p>b/p Ketua Pejabat Polis Bantuan</p>
          <p>Universiti Teknologi MARA (Pahang) </p>

          <br>
          <p>Rujukan NO. Laporan PB 05: <?php ?></p>
          <pre style="font-family:Calibri">
Nota :
          1.    Gantian Kad Pintar RM30.00 (Sila buat bayaran di Bahagian Bendahari).
          2.    Urusan membuat kad di <b>Info Tech</b>
          </pre>
          <p><b>Salinan Pertama : Penama</b></p>
        </div>
    </div>
  </div>

<body>
</html>
