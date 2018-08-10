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
</head>
<body style="font-family:Calibri; font-size:14;">
  <button id="print" onclick="printdiv('summon');">Print Summon</button>
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
        &nbsp;&nbsp;Nama: <?php?>placeholder
      </div>
      <div class="flexCol">
        <div class="flexRow">
          <div class="flexItem">
            KP: <?php?>placeholder
          </div>
          <div class="flexItem">
            Matrik: <?php?>placeholder
          </div>
          <div class="flexItem">
            Program: <?php?>placeholder
          </div>
        </div>
      </div>
      <div class="flexCol">
        <div class="flexRow">
          <div class="flexItem">
            Tarikh: <?php?>placeholder
          </div>
          <div class="flexItem">
            Masa: <?php?>placeholder
          </div>
        </div>
      </div>
      <div class="flexCol">
        <div class="flexRow">
          <div class="flexItem">Kesalahan</div>
          <div class="flexItem"><?php?>placeholder</div>
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
                Nama : <?php?>placeholder<br>
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
            <?php?>placeholder sebelum <?php?>placeholder <label>jika kompaun ini tidak dijelaskan pada tarikh tersebut <br>mengikut Kaedah 64, Bahagian V, Jadual Kedua Akta 174(1976), tindakan menggantung dari menjadi pelajar UiTM akan diambil.</label>
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
            <label><?php?>placeholder</label><br>
            <label>Tarikh</label>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
