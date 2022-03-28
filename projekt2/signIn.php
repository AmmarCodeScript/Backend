
  <?php



  if (isset($_SESSION["loggit"]) && $_SESSION["loggit"] == "loggitin"){
 
    print('<a href="./profile.php" class="buttonGreen"  >Account</a>');
  } else {

    print('<a class="buttonBlue" href="inlog_test.php?stage=login">Login  </a>');
  }

  if (isset($_REQUEST["stage"]) && ($_REQUEST["stage"] == "login2")) {
     print("<br>");
     print("<br>");
    include "inloggning.php";
  }

  ?>