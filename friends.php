<html>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Sigmar+One" />
  <head>
  <style>


    h1 {color: midnightblue; } 

    h2 {color: midnightblue;} 

    h3 {color: midnightblue; } 

    img {
      display: block;
      margin-left: auto;
      margin-right: auto;
    }





    * {
      box-sizing: border-box;
    }

    body {
      font-family: "Sigmar One"; font-style: normal; font-variant: normal; font-weight: 700;
      padding: 70px;
      text-align:center; 
      background-color: lightpink;
      background-image: url("gif/sparkle.gif");
      background-size: 100%;
    }

    /* Header/Blog Title */
    .header {
      padding: 20px;
      text-align: center;
      background-color: rgba(135, 227, 230, 0.8);
      background-image: url("gif/hwi.gif");
      background-size: 20%;
    }

    .header h1 {
      font-size: 50px;
    }

    /* Style the top navigation bar */
    .topnav {
      overflow: hidden;
      background-color: hotpink;
    }

    /* Style the topnav links */
    .topnav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    /* Change color on hover */
    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    /* Create two unequal columns that floats next to each other */
    /* Left column */
    .leftcolumn {   
      float: left;
      width: 65%;
      padding-left: 150px;
    }

    /* Right column */
    .rightcolumn {
      float: right;
      width: 25%;
      padding-left: 20px;
    }

    /* Fake image */
    .fakeimg {
      width: 100%;
      padding: 20px;
    }

    /* Add a card effect for articles */
    .card {
      background-color: rgba(135, 227, 230, 0.7);
      padding: 20px;
      margin-top: 20px;
    }

    /* Clear floats after the columns */
    .row::after {
      content: "";
      display: table;
      clear: both;
    }

    /* Footer */
    .footer {
      padding: 2px;
      text-align: center;
      background-color: lightpink;
      margin-top: 20px;
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 800px) {
      .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
      }
    }

    /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
    @media screen and (max-width: 400px) {
      .topnav a {
        float: none;
        width: 100%;
      }
    }



    div.gallery {
      margin: 5px;
      border: 1px solid #ccc;
      float: left;
      width: 180px;
    }

    div.gallery:hover {
      border: 1px solid #777;
    }

    div.gallery img {
      width: 100%;
      height: auto;
    }

    div.desc {
      padding: 15px;
      text-align: center;
    }
  </style>
  </head>

  <body>




    <div class="header">
      <h1>MA GURLS</h1>
      <p>Hér Má Sjá Sætustu Bestu Vinkonur Í Heimi.</p>
    </div>

    <div class="topnav">
      <a href="#">Link</a>
      <a href="#">Link</a>
      <a href="#">Link</a>
      <a href="#" style="float:right">Link</a>
    </div>

    <div class="row">
      <div class="leftcolumn">
        <div class="card">
          <h2>WHoOo are THEY</h2>
          
            <div class="gallery">
              <a href="aldis.php">
                <img src="pic/aldis.png" width="600" height="400">
              </a>
              <div class="desc">Aldís</div></div>
          
            <div class="gallery">
              <a href="kristin.php">
                <img src="pic/kristin.png" width="600" height="400">
              </a>
              <div class="desc">Kristín</div>
            </div>
            <div class="gallery">
              <a href="tinna.php">
                <img src="pic/tinna.png" width="600" height="400">
              </a>
              <div class="desc">Tinna</div>
          <div class="card">
          
          </div>

          <p>Some text..</p>
        </div>
      
      <div class="card">
          
          <h2>memorable moments</h2>
          <a href="friends.php"><img src="gif/friends.JPG" style="width:80%"></a>
          <p>Ýttu Á Myndina Til Að Sjá Meir</p>

        </div>
      </div>
      <div class="rightcolumn">
        <div class="card">
          <h2>&#9734;Um Þær&#9734;</h2>
          <h3>...</h3>

        </div>
        <div class="card">
          <h3>...</h3>
          <div><img src="gif/engill.JPG" style="width:80%"></div>
          <div><img src="gif/sæt.JPG" style="width:80%"></div>
          <div><img src="gif/englaeg.JPEG" style="width:80%"></div>
        </div>
        <div class="card">
          <h3>Follow Me</h3>
          <p>Some text..</p>
        </div>
      </div>
    </div>

    <div class="footer">
      <h2>Footer</h2>
    </div>




  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="pink" position="bottom-right"></script>
  </body>
</html>