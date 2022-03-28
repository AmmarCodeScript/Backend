<?php
session_start();
include "functions.php";
?>

<?php
// andra cookies exempel
$cookie_name = array("zero", "boss", "kunde", "log", "pas");
$cookie_zero = $cookie_name[0];
$cookie_one = $cookie_name[1];
$cookie_two = $cookie_name[2];
$cookie_log = $cookie_name[3];
$cookie_pas = $cookie_name[4];

$cookie_value = array("valuetext0", "valuetext1", "valuetext2", "LOG", "PAS");
$cookie_value0 = $cookie_value[0];
//$cookie_value1 = $cookie_value[1];
//$cookie_value2 = $cookie_value[3];
$cookie_value3 = $cookie_value[3];
$cookie_value4 = $cookie_value[4];

setcookie($cookie_log, $cookie_value3, time() + (86400 * 365), "/");
setcookie($cookie_pas, $cookie_value4, time() + (86400 * 365), "/");

if (!isset($_COOKIE[$cookie_zero])) {
    $zero_data = "data var zero";
    $cookie_valueA = "Kunde Magnet" . "<br>" . $zero_data;
    setcookie($cookie_zero, $cookie_valueA, time() + (86400 * 365), "/");
    echo "Cookie named" . " '" . $cookie_zero . "' is not set!";
}

//setcookie($cookie_zero, $cookie_value0, time() + (86400 * 365), "/"); // 86400 = 1 day
//setcookie($cookie_one,  $cookie_value1, time() + (86400 * 365), "/"); // 86400 = 1 day
//setcookie($cookie_two,  $cookie_value2, time() + (86400 * 365), "/"); // 86400 = 1 day

?>

<?php //include "function.php"
?>
<?php //include "navbar.php" 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Back-end kurs</title>
    <link rel="stylesheet" href="./style.css" />
</head>

<body>






    <div id="container">

        <nav>

            <ul>
                <a id="logo" href="../index.php">Startsida</a>
                <a href="../projekt1/">Projekt 1</a>
                <a href="../projekt2/">Projekt 2</a>
                <a href="../projekt3/">Projekt 3</a>
            </ul>
        </nav>



        <!-- Artiklar placerar sig snyggt efter varann -->

        <article>
            <h1>Välkommen till vårt första backendprojekt </h1>
            <a href="../PDF/projekt1-backend.pdf" target="_blank">Projekt1 PDF</a>
        </article>


        <!-- uppgift 1 -->
        <?php include "uppgift1.php" ?>

        <!-- uppgift 2 -->
        <?php include "uppgift2.php" ?>

        <!-- uppgift 3 -->
        <?php include "uppgift3.php" ?>

        <!-- uppgift 4 -->
        <?php include "uppgift4.php" ?>

        <!-- uppgift 5 -->
        <?php include "uppgift5.php" ?>

        <!-- uppgift 6 -->
        <?php include "uppgift6.php" ?>

        <!-- uppgift 7 -->
        <?php include "uppgift7.php" ?>

        <!-- uppgift 8 -->
        <?php include "uppgift8.php" ?>

        <!-- uppgift 9 -->
        <?php include "uppgift9.php" ?>

        <article> 
        <!-- uppgift 10 -->
        <?php include "uppgift10.php" ?>


        </article>
 
    <script src="../script.js"></script>
</body>
</html>