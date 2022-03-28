<?php include "init.php" ?>
<?php include "head.php" ?>

<!-- Artiklar placerar sig snyggt efter varann -->


<article id="Kontaktannonser">
    <div class="myDIVClass">
        <h1>Kontaktannonser</h1>
        <?php include "filter.php" ?>
        <?php include "fetch.php" ?>
        <?php include "signOutTest.php" ?>
        <?php include "add_like_dislike.php" ?>


    </div>
</article>

<article id="Registrera" >
    <div class="myDIVClass" >

        <h1>Registrera dig!</h1>
        
        <?php include "uppgift2.php"; ?>
</article>

<article id="rapport">
    <div class="myDIVClass">
        <h1>Uppg 10 - Reflektion och feedback</h1>
        <h2>1. Databasen</h2>
        <h3>Databas tabell strukturen</h3>
        <P>- users = Användarens konto</P>
        <P>- users -> likes = Gilla/Ogilla för kontaktannonserna</P>
        <P>- comments = kommentarerna på kontaktannonserna</P>
        <div class="mxgraph" style="max-width:100%;border:1px solid transparent;" data-mxgraph="{&quot;highlight&quot;:&quot;#0000ff&quot;,&quot;nav&quot;:true,&quot;resize&quot;:true,&quot;toolbar&quot;:&quot;zoom layers tags lightbox&quot;,&quot;edit&quot;:&quot;_blank&quot;,&quot;xml&quot;:&quot;&lt;mxfile host=\&quot;app.diagrams.net\&quot; modified=\&quot;2022-02-24T17:36:17.151Z\&quot; agent=\&quot;5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36\&quot; etag=\&quot;IJLCTceHlMDfJ-dN_iB8\&quot; version=\&quot;16.6.3\&quot;&gt;&lt;diagram id=\&quot;JuPcQaO_Jd6Nco4N-Ff4\&quot; name=\&quot;Page-1\&quot;&gt;7VpLc9sgEP41nmkO6UjIj/iYV9+d8cSHtKcOkdYSLRIqwrGdX9+VhSyhR+w4iRM7vSRigQW+bxfYxR3nPJx/lDQOvgsPeIdY3rzjXHQIGQ4c/JsKFlrgkEzgS+ZlIrsQjNkdaKGlpVPmQWI0VEJwxWJT6IooAlcZMiqlmJnNJoKbo8bUh5pg7FJel14zTwWZ9IQMCvknYH6Qj2z3h1lNSPPGeiVJQD0xK4mcy45zLoVQ2Vc4PweeYpfjkvX70FK7mpiESG3SQY7Dq7PR9eLD+MtwdH1FPvt8fKy13FI+1QvukD5HfWc3+OGnH7lgInAcXIZaaGz6f6cirzhOlsydYgOc07yozLVME5BJrgonmWkzR0BxaVRiDEakmEYepGuxsHoWMAXjmLpp7QwtD2WBCjmW7FXvMjb5QkEqmJdEGquPIEJQcoFN5qYBarvt6eKsMALH0bKgZAB9LaPa7vyV4oIa/NDsPICpQQ0R8NBSdVFIFQhfRJRfFtIzE7OizTchYo3Ub1Bqod2OTpUwcUT45OIHFo6t95bVyyU/U43ve10nF1zM9RhZaaFLKclatz3Ia0cgGUICUjdq5UpR6YO6B5Je1i7F4V5GJXCq2K3p0U0E6a4jwZamri2hS0xTIMMKx4mYShd0rwrNq2lszzxp9dFNXdIeNLkkDqr1JDGNGvUs3ew4yfws1RRLqCvC/x3iDE1PznSaDn4o4yDR72z7aFfDjdBh6NKSv8JitT/L8tYa0RB2NZ1bKt2AynfEShGgYbr3RjdJXOpRTE4C5buc3K5B6FpH9UXHNElmQnpt8OyMoV6vYXYQUsafbSq7IvghfNyx2MWL6aHaIGla8w0Te7/eF7alZvdJKF9uxnuObdOR1mRHpfZNd3aP3W5/A8mVPO4eY0Kkd2AJE8AbpQsvjGvT5FKsydGaDu0x0hLypwSQsz8YYqe33IOzaexbvqnVQK2EVGvCSprEWY5hwuZpWHVGOfMjLHOYFPqeMuy07Q3jzpXwyQPP7qPDj+aMwGqryQWuCEMErpwlqCUh1hG46yxB9+SVpQl6jw8WTzbdZP8HkPscQLYsvX7yl1tpH93hYVG5jDXGU2uXEksxYRx+HZ7Ftt7bMOiODm2xuCkr41b++s/z6gHxCg70fAbGGVHNLUfeafp6gqVIRGDCZh6y1SRvK2hr87QlSHoNiOSyR6ZznW6FkZPN0rlr88I1RVkC+9nywnbT483b4XHbtPzr47Epwf92eKz6I7G25dFeo+i5eXTeNI9V+J295bFfp+35n1ob30rbnl77uGfc//S6p0+tVeqHwy1tqF8xRvJUNoTF4jcbWfPihy/O5T8=&lt;/diagram&gt;&lt;/mxfile&gt;&quot;}"></div>
        <script type="text/javascript" src="https://viewer.diagrams.net/js/viewer-static.min.js"></script>

        <h2> 2. Databasen </h2>
        <h3>
            Användaren sparars i databasen i users tabellen. där hans password blir hashat och allt inputen av hans information blir testet med function test_input() som tester att det är ingen hack script som föres till databasen. <br>
            Användarens registrering och inloggning sparas genom metod Post för att det skall vara säkert
        </h3>


        <h2> 3. Hämta data från databasen</h2>
        <h3>
            Hämtar relevant information från databasen genom Fetch php. <br>
            Både inloggade och anonyma användare kan se på annonserna som publicerats. <br>
            Och om man är inloggad ser mera information som e-post och lönen i kontaktannonserna. <br>
            Sidan visar 5 annonser som är default valg. man kan justera filteren med 5 eller max annonser och andra stillenger. <br>
        </h3>

        <h2>4. Mata in data i databasen</h2>
        <h3>
            Här kan man registera sig för att få tillgång till interaktion med annonserna. <br>
            Först måste man skriva in
            ( -Användarnamn
            - Riktigt namn (Rubrik för annons)
            - Lösenord
            - Email
            - Postnummer
            - Annonstext (“Berätta om dig”)
            - Årslön
            - Preferens (Man, Kvinna, Båda, Annat, Alla)). <br> Och sen allt blir registerat i databasen under users tablen med function test_input() som tester att det är ingen hack script som föres till databasen.
        </h3>
        <h2> 5. Ta bort data från databasen </h2>
        <h3>
            Här kan användaren ta bort sitt kontaktannonsen genom att verifiera lösenordet innan borttagning.
        </h3>
        <h2>6. Ändra information i databasen </h2>
        <h3>
            Efter inloggning kan användaren uppdatera sin information i kontaktannonsprofilen. <br>
            Formuläret fylls med användarens tidigare information så att man kan uppdatera till nytt information.
        </h3>

        <h2>Sortera och filtrera resultat</h2>
        <h3>
            Här kan man sortera resultaten enligt inkomst, preferens och dessutom sortera enligt hur många som gillat annonsen. <br>
            Det går också begränsa antalet resultat från max till 5. <br> Och om man är utloggad kan man INTE sortera enligt inkomst.
        </h3>

        <h2>8. Gilla / Ogilla</h2>
        <h3>
            När man är inloggad kan man gilla/ogilla annonser sparas i `users` tabellen.
        </h3>

        <h2>9. Chatt</h2>
        <h3>
            Man måste vara inloggad för att kommentera på andras kontaktannonser som sparas i `comments` tabellen.
        </h3>

        <h2>
            Bonus
        </h2>
        <h3>
            Nice design. <br>
            Responsiv desing. <br>
            Verifiera lösenordet innan borttagning. <br>
            Projeckt kod finns på <a href="http://">GitHub</a> 
        </h3>
        <h2>Reflektion och feedback </h2>
        <h3>
            tycker att kursen har varit ganska bra det var lite krevende för att kunne fullföra alla uppgifter, men tycker att det har varit super bra för att lära php och databasen 
        </h3>
    </div>
</article>



<?php include "footer.php" ?>