<?php include "init.php" ?>
<?php include "head.php" ?>
<article>
        <div class="myDIVClass">
                <h1>Bläddra bland kotaktannonser</h1>
                <p>Använda gärna filterings och sorteringsformuläret</p>
                <form action="users.php" method="get">
                        <label for="rich">Riks först</label>
                        <input type="radio" name="salary" value="rich" checked>
                        <label for="poor">Riks sist</label>
                        <input type="radio" name="salary" value="poor"> <br>
                        <label for="pop">Populära först</label>
                        <input type="radio" name="likes" value="pop" checked>
                        <label for="notpop">Populära sist</label>
                        <input type="radio" name="likes" value="notpop">
                        <br> <br>
                        <label for="pref">Preferens</label>
                        <select name="pref" class="button">
                                <option value="male">Manlig</option>
                                <option value="female">Kvinnlig</option>
                                <option value="other">Annan</option>
                                <option value="both">Båda</option>
                                <option value="all">Alla</option>
                        </select>
                        <input type="submit" value="Filtrera" class="buttonBlue">
                </form>
                <?php include "fetch.php" ?>
        </div>
</article>
<?php include "footer.php" ?>