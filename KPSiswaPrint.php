<!DOCTYPE html>
<html>
<head>
  <style>

    /* base flex */
    .flexCont
    {
      display: flex;
      flex-wrap: nowrap;
      flex-direction: column;
      width:800px;
      height: auto;
      background-color: lime;
    }
    /*use for end item*/
    .flexItem
    {
      margin: 10px;
      background: teal;
    }

    /*flex row */
    .flexRow
    {
      display: flex;
      flex-direction: row;
      flex-basis: 100%
      align-items: center;
      justify-content: space-around;
    }

    /*flex column */
    .flexCol
    {
      display: flex;
      flex-direction: column;
      margin:10px;
    }
  </style>
</head>
<body style="font-family:Calibri;">
  <div class="flexCont">
    <div class="flexCol">
      <div class="flexRow">
        <div class="flexItem">
          <img src="images\LogoUiTM_(color).jpg" style="width:350px;height:140px">
        </div>
      </div>
    </div>
    <div class="flexCol">
      <div class="flexRow">
        <div class="flexItem">
          Notis Kesalahan Pelajar
        </div>
        <div class="flexItem">
          No.c8282882 (temp)
        </div>
      </div>
    </div>
    <div class="flexCol">
      <div class="flexItem" style="align-items: center;justify-content:center;">
        Nama: <?php?>
      </div>
      <div class="flexCol">
        <div class="flexRow">
          <div class="flexItem">
            KP
          </div>
          <div class="flexItem">
            Matrik
          </div>
          <div class="flexItem">
            Program
          </div>
        </div>
      </div>
      <div class="flexCol">
        <div class="flexRow">
          <div class="flexItem">
            Tarikh
          </div>
          <div class="flexItem">
            Masa
          </div>
          <div class="flexItem">
            template
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
          <br><br>Anda boleh manghadirkan diri atau mengaku kesalahan ini dengan surat kepada Pegawai Hal Ehwal Pelajar supaya kesalahan ini boleh di kompaunkan.
        </div>
      </div>
      <div class="flexCol">
        <div class="flexRow">
          <div class="flexItem">
                ..............................
          </div>
          <div class="flexItem">
                ..............................
          </div>
        </div>
      </div>
      <div class="flexCol">
        <div class="flexRow">
          <div class="flexItem">
                Tandatangan Pelapor<br>
                Nama : <?php?>
          </div>
          <div class="flexItem">
                Tandatangan Pelajar
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
