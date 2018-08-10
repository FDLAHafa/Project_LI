<!DOCTYPE html>
<html>
<head>
  <style>

    /* base flex */
    .flexCont
    {
      display: flex;
      flex-wrap: nowrap;
      background-color: red;
      width:800px;
      align-items: center;
      justify-content: space-around;
    }
    /*use for end item*/
    .flexItem
    {
      margin: 50px;
    }

    /*flex row */
    .flexRow
    {
      display: flex;
      margin: 40px;
      flex-direction: row;
      background-color: blue;
      flex: 0 1 100px;
    }

    /*flex column */
    .flexCol
    {
      display: flex;
      margin: 50px;
      flex-direction: column;
      flex: 0 1 50%;
      background: yellow;
    }
  </style>
</head>
<body>
  <div class="flexCont">
    <div class="flexCol">
      <div class="flexRow">
        <div class="flexItem">
          ikan masin
        </div>
        <div class="flexItem">
          ayam golek
        </div>
      </div>
      <div class="flexRow">
        <div class="flexItem">
          air kelapa
        </div>
        <div class="flexItem">
          air suam
        </div>
      </div>
    </div>
    <div class="flexCol">
      nasi minyak
    </div>
  </div>
</body>
</html>
