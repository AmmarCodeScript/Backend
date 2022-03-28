<article>

    <div class="myDIV">
        <h1>Uppg 2 - Tid och datum</h1>
        <p>samt veckodag och månad på svenska</p>

        <div class="separator1"> </div>
        <article>
            <?php

            echo "Datum i dag är " . date("d.m.Y") . "<br>";
            date_default_timezone_set("Finland/Helsinki");
            echo "Klokka är : " . date("H:i");
            echo "<br>";

            $veckasnamn = array("söndag", "måndag", "tisdag", "onsdag", "tordag", "fredag", "lördag");
            echo " Här är veckans nummer i PHP språk :";
            echo date('w');
            echo "<br>";

            if (date('w') == 1) {
                echo "Det är måndag idag";
            }
            if (date('w') == 2) {
                echo "Det är tisdag idag";
            }
            if (date('w') == 3) {
                echo "Det är onsdag idag";
            }
            if (date('w') == 4) {
                echo "Det är tordag idag";
            }
            if (date('w') == 5) {
                echo "Det är fredag idag";
            }
            if (date('w') == 6) {
                echo "Det är lördag idag";
            }
            if (date('w') == 0) {
                echo "Det är söndag idag";
            }
            echo "<br>";
            $currentWeekNumber = date('W');
            echo 'Veckonummer : ' . $currentWeekNumber;
            echo "<br>";
            $currentWeekNumber1 = date('d');
            echo 'Dag nummer : ' . $currentWeekNumber1;

            echo "<br>";
            $month = date("m");

            if ($month == 1) {
                echo "Det är Januari";
            }
            if ($month == 2) {
                echo "Det är Februari";
            }
            if ($month == 3) {
                echo "Det är Mars";
            }
            if ($month == 4) {
                echo "Det är April";
            }

            if ($month == 5) {
                echo "Det är Maj";
            }
            if ($month == 6) {
                echo "Det är Juni";
            }
            if ($month == 7) {
                echo "Det är Juli";
            }
            if ($month == 8) {
                echo "Det är Augusti";
            }
            if ($month == 9) {
                echo "Det är September";
            }
            if ($month == 10) {
                echo "Det är Oktober";
            }
            if ($month == 11) {
                echo "Det är November";
            }
            if ($month == 12) {
                echo "Det är December";
            }

            ?>
        </article>
    </div>
</article>