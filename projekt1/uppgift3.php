<article>
    <!--Uppgift 3 HTML  -->
    <div class="myDIV">
        <h1>Uppg 3 - Formulär</h1>

        <p>var användaren lägger in datum och servern svarar hur långt det är dit</p>

        <form action="index.php" method="get">
            Datum: <input type="date" name="datum">
            <input type="submit" class="button">
            <br>

            <?php

            if (isset($_REQUEST["datum"])) {
                $datumin_update = $_GET["datum"];
            }

            $dindatumapp_update = date("$datumin_update 00:00:00");
            $dindatumval_update = date("$datumin_update ");
            $datum_IF_SORT_update = strtotime($dindatumval_update); //strtotime("2020-01-22 12:58:00");

            //update slutt

            $dindatumapp = date("$aretin-$mandadin-$dagin 00:00:00");
            $dindat_KL = date("$aretin-$mandadin-$dagin");
            $datumnu = date("Y-m-d H:i:s");
            $date1 = strtotime($dindatumapp); //strtotime("2020-01-22 12:58:00");

            //if test
            $dindatum_IF = date("$aretin-$mandadin-$dagin");
            $datum_IF = date("Y-m-d");
            $dindatum_FI_SORT = strtotime($dindatum_IF); //if datum in
            $nu_datum_FI_SORT = strtotime($datum_IF); // if datum nu
            $veckadagval = date('w', $datum_IF_SORT_update);
            //if test slut
            $date2 = strtotime($datumnu);

            "<br>" . "diff";
            // Formulate the Difference between two dates
            $diff = abs($date2 - $datum_IF_SORT_update);
            //echo "<br>" . "år ";
            $years = floor($diff / (365 * 60 * 60 * 24));
            //echo"<br>" . "månad ";
            $months = floor(($diff - $years * 365 * 60 * 60 * 24)
                / (30 * 60 * 60 * 24));
            //  echo"<br>" . "dager ";
            $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
            //echo"<br>" . "Timmer ";
            $hours = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24) / (60 * 60));
            //echo "<br>" . "Minuter ";
            $minutes = floor(($diff - $years * 365 * 60 * 60 * 24
                - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24
                - $hours * 60 * 60) / 60);
            //echo"<br>" . "Sekunder ";
            $seconds = floor(($diff - $years * 365 * 60 * 60 * 24
                - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24
                - $hours * 60 * 60 - $minutes * 60));

            echo "<br>";
            echo '<div class="separator1"> </div>';
            print '<article>';
            if ($datumin_update !== "") {
                if ($datum_IF_SORT_update >= $nu_datum_FI_SORT) {
                    print '<div id="myDIV1">';
                    echo "<br>";
                    print ("Ditt datum val var:" . $dindatumval_update) . "<br>";
                    echo "veckadag är " . $veckasnamn[$veckadagval];
                    echo "<br>";

                    print ("Det är  " . $years . " år igen för din datum,") . "<br>";
                    print ("och  " . $months . " månader,") . "<br>";
                    print ("och  " . $days . " dager,") . "<br>";
                    print (" och  " . $hours . " timmer,") . "<br>";
                    print (" och " . $minutes . " minuter,") . "<br>";
                    print (" och  " . $seconds . " sekunder.") . "<br>";
                    print '</div>';
                }

                if ($datum_IF_SORT_update < $nu_datum_FI_SORT) {
                    print '<div id="myDIV2">';
                    echo "<br>";
                    print ("Ditt datum val var:" . $dindatumval_update) . "<br>";
                    echo "Veckadag var " . $veckasnamn[$veckadagval];
                    echo "<br>";

                    print ("Det var  " . $years . " år igen för din datum,") . "<br>";
                    print ("och  " . $months . " månader,") . "<br>";
                    print ("och  " . $days . " dager,") . "<br>";
                    print (" och  " . $hours . " timmer,") . "<br>";
                    print (" och " . $minutes . " minuter,") . "<br>";
                    print (" och  " . $seconds . " sekunder.") . "<br>";
                    print '</div>';
                }
            }

            print '</article>';

            ?>
    </div>
</article>