<?php include "init.php" ?>
<?php include "head.php" ?>

<!--uppgift 6 börjar här-->

<br><br>
<!--<form action="./inlog_test.php" method="get" style=" -->
<div id="loggain23">
    <div class="myDIVClass">
        <form action="#" method="post" style="padding-left: 10x;">

            <table>
                <tbody>

                    <tr>
                        <td> Login:</td>
                        <td><input type="text" name="login"><input type="hidden" name="stage" value="login"><br>
                            <!--1 kommer in namn-->
                        </td>
                    </tr>

                    <tr>
                        <td> Password:</td>
                        <td>
                            <input type="password" name="passord"><br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" value="Login" class="buttonBlue">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>

<?php
echo '<script type="text/javascript">
var x = document.getElementById("loggain23");
x.style.display ="block";
</script>';


if (isset($_REQUEST["stage"]) && $_REQUEST["stage"] == "login") {
    $USER = test_input($_REQUEST["login"]);  // 2 här spars namn till storge
    $PASS = test_input($_REQUEST["passord"]);
    $PASS = hash("sha256", $PASS);
    $conn = create_conn();
    $sql = "SELECT * FROM users WHERE username = ? AND password = ? limit 1";

    //$sql = "SELECT * FROM users WHERE username = '".$USER."' AND password='".$PASS. "' limit 1";
    $stmt = $conn->prepare($sql); // beskyte mot insjektion 

    $stmt->bind_param("ss", $USER, $PASS); //tar bort dårlig hackigs code 
    $stmt->execute(); // Kör sql kommandot - returnerar boolean (true/false)

    $result = $stmt->get_result(); // returnerar false eller mysqli_result objekt
    $row = $result->fetch_assoc(); //Ta ut datan från  mysqli_result objektet till en assArr
    if ($row == true) {

        $_SESSION["loggit"] = "loggitin";
        $_SESSION["realname_print"]     = $row['realname'];
        $_SESSION["username_print"]     = $row['username'];
        $_SESSION["email_print"]        = $row['email'];
        $_SESSION["zipcode_print"]      = $row['zipcode'];
        $_SESSION["bio_print"]          = $row['bio'];
        $_SESSION["salary_print"]       = $row['salary'];
        $_SESSION["preference_print"]   = $row['preference'];
        $_SESSION["id_print"]   = $row['id'];
    }

    //$_SESSION["loggit"]= "loggitin";  //<-----
    //session_unset(); för att loga av 
}

if ($_SESSION["loggit"] == "loggitin") {

    echo '<script type="text/javascript">
    var x = document.getElementById("loggain23");
    x.style.display ="none";
    </script>';

    print('<div class="myDIVClass" >');
    print("<p>Välkommen:" . $_SESSION["username_print"] . "<br> </p>");
    print('<a href="./index.php" class="buttonBlue">Projekt2</a>');
    print('<a href="./profile.php" class="buttonGreen">Account</a>');

    print ' <form action="./inlog_test.php" method="post">';
    print '<input type="hidden" name="stage"  value="loggav">';
    print '<br>';
    print '<input type="submit"  class="buttonRed" value="Loggav">';
    print ' </form>';

    print("</div>");
}

if (isset($_REQUEST["stage"]) && $_REQUEST["stage"] == "loggav") {
    print("loggar av in om 2 sekunder ...");
    session_unset();
    session_destroy();
    header('Location: #');
    print("work");
}

?>