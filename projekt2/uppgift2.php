<!-- <a href="index.php?stage=signin">  -->



<?php

// include "register.php";
if (isset($_REQUEST["stage"]) && ($_REQUEST["stage"] == "signup") || ($_REQUEST["stage"] == "register")) {
    include "register.php";
} else {
    include "signIn.php";
    print('<a href="index.php?stage=signup"> <input type="button" value="Registera dig" class="button"> </a><br>');
}
?>