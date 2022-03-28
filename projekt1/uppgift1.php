<article>
    <div class="myDIV">
        <h1>Uppg 1 - Användardata</h1>
        <p>Användare, IP, apache version mm</p>

        <div class="separator1"> </div>
        <article>
            <?php
            echo ("Server addres : ");
            echo $_SERVER['PHP_SELF'];
            echo "<br>";
            echo "<br>";

            echo ("Användare namn: ");
            echo $_SERVER['REMOTE_USER'];
            echo "<br>";
            echo "<br>";

            echo ("IP till skolan : ");
            echo $_SERVER['SERVER_ADDR'];
            echo "<br>";
            echo "<br>";

            echo ("Apache : ");
            echo $_SERVER['SERVER_SOFTWARE'];
            echo "<br>";
            echo "<br>";

            echo ("PHP version : ");
            $version = phpversion();
            print $version;
            echo "<br>";
            echo "<br>";

            echo ("Servers namn : ");
            echo $_SERVER['SERVER_NAME'];
            echo "<br>";
            echo "<br>";

            echo ("IP till hemme : ");
            echo $_SERVER['REMOTE_ADDR'];
            echo "<br>";
            echo "<br>";
            ?>

    </div>
</article>