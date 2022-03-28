<?php
   if (isset($_REQUEST["stage"]) && $_REQUEST["stage"] == "loggav") {
      session_unset();
      session_destroy();
      header('Location: index.php');
      
   }
   ?>