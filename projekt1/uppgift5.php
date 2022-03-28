<article>
    <div class="myDIV">
        <h1>Uppgift 5 - Cookie</h1>
        <p>script som hälsar på returnerande användare</p>

        <?php
        if (!isset($_COOKIE[$cookie_one])) {
            print '<div class="myDIVRed">';
            $cookie_datein = ("<br>" . "Din datum är: " . date("d.m.Y") . "<br>Din kloka är: " . date("H:i:s"));
            $cookie_dateSTR = strval($cookie_datein);
            $cookie_data = $cookie_dateSTR;
            $cookie_value1 = "Ammar Boss" . $cookie_data;
            setcookie($cookie_one, $cookie_value1, time() + (86400 * 365), "/"); // 86400 = 1 day
            echo "Cookie named" . " '" . $cookie_one . "' is not set!";
            print '</div>';
        }
        if (isset($_COOKIE[$cookie_one])) {
            // echo "Value is: " . $_COOKIE[$cookie_name];
            print '<div class="myDIVGreen">';
            print("Velkomen" . "<br>" . $_COOKIE['boss']);
            print '<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>';
            print '</div>';
        }
        ?>

    </div>
</article>