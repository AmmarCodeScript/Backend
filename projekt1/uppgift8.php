<article>
    <div class="myDIV">
        <h1>Uppgift 8 - Besöksräknare</h1>
        <?php

        $dinIP = "Din ip :" . $_SERVER['REMOTE_ADDR'];
        $myfile = fopen("besok.log", "a+") or die("Unable to open file!");
        fwrite($myfile, "Namn  " . $items9[0] . " Datum : " . date("d.m.Y") . " KL: " . date("H:i:s") . " " . $dinIP . "\n");
        rewind($myfile);
        while (!feof($myfile)) {
            $line = fgets($myfile);
            $linecount++;
        }
        fclose($myfile);
        print('<a href="besok.log" target="bla<nk">Besök logg</a>');
        echo "<br>";
        print("antall besök " . $linecount);
        ?>

        <p>som lagrar det totala antalet besök på en sida i en fil</p>
        <div>
</article>