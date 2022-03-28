<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Back-end kurs</title>
		<link rel="stylesheet" href="./style2.css" />

</head>
<body>
<div class="container">

    <div class="with-container">
    <div class="grid-container">

      <!--Header-->
      <div class="item1">
                    <nav>
              <a href="./"><img id="logo" src="logo.svg" alt="Amppari" /></a>
                              <ul>
                                    <a id="logo" href="../index.php">Startsida</a>
                                        <a href="../projekt1/">Projekt 1</a>
                                      <a href="../projekt2/">Projekt 2</a> 
                                    <a href="../projekt3/">Projekt 3</a>
                          </ul>
                  </nav>
      </div>
      
    <!--Menu-->
    <div class="item2">Menu
    <article>
                <div class="myDIVClass">
                    <h1>Uppg 1 (Hämta data)</h1>
                    <?php //include "fetch.php"?>
                
                    </div>
                </article>

    </div>
      

    <!--Main-->
      <div class="item3">
      <div class="myDIVClass">
      <p>Main</p>
      <p>Välkommen till vårt <br> andra backend projekt 2</p>
                    <p>Uppg 1 (Hämta data)</p>
                    <?php include "inlog_test.php"?>
                </div> 
      </div>  





        <!--Right-->
      <div class="item4">
          <div>
            <details >
              <summary  ></summary>
              <nav class="menu">
                <a href="./index.php"> Home</a>
                <a href="./users.php">Annonser</a>
                <a href="#rapport">Rapport</a>
                <a href="../PDF/projekt2-backend.pdf" target="_blank">P.2 PDF</a>
                <a href="#about">About</a>
              </nav>
            </details>
        </div>
      </div>

      <!--Footer-->
      <div class="item5">Footer
      <p>l</p>
      <?php include "../fetch.php"?>
      </div>
      
    </div>


</div>
</body>
</html>
