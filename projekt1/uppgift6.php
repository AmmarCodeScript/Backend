
     <!--uppgift 6 börjar här-->
<article>
    <div class="myDIV">
        <h1>Uppgift 6 - PHP-Session​</h1>
        <p>möjliggör att gömma vissa sidor från användaren <br> Put "Ammar" in the password field to log in </p>
        <form action="index.php" method="post">
            Login: <input type="text" name="login" style="margin-left: 30px;"><br>
            Password: <input type="text" name="passord" style="margin-left: 7px;"><br>
            <input type="submit" value="Logga in" class="button">
        </form>


        <?php
        $userLogin = test_input($_POST["login"]);
        $userPassword = test_input($_POST["passord"]);
        $Submitav = $_REQUEST["submit"];

        if ($Submitav == "Loggav") {
        }
        if (isset($_REQUEST["login"])) {
            if ($userPassword == "Ammar") {
                //" Sessionen abc123 == $_SESSION['zero']= Ammar"
                $_SESSION['zero'] = "Ammar";
                $_SESSION['log'] = $userLogin;
                $_SESSION['pas'] = $userPassword;
                echo '<div class="myDIVGrey">';
                print("<br>" . "Login : " . $userLogin . "<br>");
                print("Pasword : " . $userPassword);
                print("<p>Endast Ammar har tillgång till Darkwebb </p>");
                print("<a href='darkwebb.php'>Dark Web</a>");
                echo '</div>';
            } else {
                print '<div class="myDIVRed">';
                print("<p>Du har inte tillgång till Darkwebb </p>");
                print '</div>';
            }
        }
        if (isset($_COOKIE[$cookie_zero])) {
            print '<div class="myDIVGreen">';
            print("Velkomen" . "<br>" . $_COOKIE['zero'] . "<br>");
            print("Velkomen" . "<br>" . $_COOKIE['log'] . "<br>");
            print("Velkomen" . "<br>" . $_COOKIE['pas'] . "<br>");
            print '</div>';
        }
        ?>
    </div>
</article>