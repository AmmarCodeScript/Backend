<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Back-end kurs</title>
		<link rel="stylesheet" href="../css/style.css" />
	</head>

    <body class="Darkweb">
        
        <div id="container">

            <nav>
                <ul>
                    <a id="logo" href="../index.php">Startsida</a>
                    <a href="../projekt1/">Projekt 1</a>
                    <a href="./projekt2/">Projekt 2</a>
                    <a href="../projekt3/">Projekt 3</a>
                </ul>
            </nav>

           

            <!-- Artiklar placerar sig snyggt efter varann -->
           

            <article>


           
            <?php
                if ($_SESSION['zero'] == "Ammar")
                {
                    echo '<div class="myDIVGreenD">';
                    print(" <h1>Välkommen till Dark Web : ".$_SESSION['zero']." ! "."</h1>");
                   print ("<article>");
                   echo "<p>";
                   print_r($_SESSION);
                   echo "</p>";
                print("</article>");
                echo'</div>';
                    echo '<div class="myDIVGrey">';
                   //" Sessionen abc123 == $_SESSION['zero']= Ammar"
                print("<br>"."<h3>"."Din data från uppgift 6 inloggning var :"."</h3>"."<br>"."<p> Login : ".$_SESSION['log']."</p><br>" );
                print("<p>Pasword : ".$_SESSION['pas']."</p>" );
                print("<p> Endast ".$_SESSION['zero']." har tillgång till Darkwebb </p>");  
                print ("<br>"); 
                           
                print("<h3>"."<a href='darkwebb.php'>Dark Web</a>"."</h3>");
                print("<h3>"."<a href='../projekt1/'>Gå till inloggningssidan</a>"."</h3>");

               print' <form action="darkwebb.php" method="post">';
               print '<input type="hidden" name="stage"  value="loggav_test">';
               print '<input type="submit"  class="b_close" value="Loggav_test">';
               print' </form>';
            

                echo'</div>';
                }
                
             

                else {
                    print '<div class="myDIVRed">';
                    print" <h1>Du har inte tillgång till Darkwebb. <br> Först måste du logga in i Uppgift 6 - PHP-Session​ </h1>";
                    print("<h3>"."<a href='../projekt1/'>Gå till inloggningssidan</a>"."</h3>"); 
                    print'</div>';
                  print '<script> window.open("../projekt1/"); </script>';
                }
            ?>
      
           <?php 
           $LoggAvR = $_REQUEST["loggav_test"];
           if (isset($_REQUEST["stage"]) && $_REQUEST["stage"] == "loggav_test") {
            print("loggar av in om 2 sekunder ...");
            session_unset();
            session_destroy();
            header('Location: darkwebb.php');
            //include "inloggning.php";
        }
           
           
           ?>           
</article>
        </div>
        
            <!--Script kan köras efter att sidan laddats in-->
            <script src="../script.js"></script>
            <!-- 
            <script type="application/javascript" src="https://api.ipify.org?format=jsonp&callback=getIP"></script>
            -->
    </body>
</html>