<form action="index.php" method="get">
    <table>
        <tbody>
            <tr>
                <td><label for="adQuantity">Antall annonser</label></td>
                <td> <select name="adQuantity" class="buttonM">
                        <option value="5">5</option>
                        <option value="Max">Max</option>

                    </select></td>
            </tr>
            <tr>
                <td> <label for="inte">Riks inte</label>
                    <input type="radio" name="salary" value="not" checked>
                </td>
                <td><label for="rich">Riks först</label>
                    <input type="radio" name="salary" value="rich" >
                </td>

                <td> <label for="poor">Riks sist</label>
                    <input type="radio" name="salary" value="poor">
                </td>



            </tr>
            <tr>
                <td> <label for="inte">Populära inte</label>
                    <input type="radio" name="likes" value="not" checked>
                </td>
                <td> <label for="pop">Populära först</label>
                    <input type="radio" name="likes" value="pop" >
                </td>
                <td> <label for="notpop">Populära sist</label>
                    <input type="radio" name="likes" value="notpop">
                </td>
            </tr>
            <tr>
                <td><label for="pref">Preferens</label></td>
                <td> <select name="pref" class="buttonM">
                <option value="not">Välje</option>
                        <option value="all">Alla</option>
                        <option value="male">Manlig</option>
                        <option value="female">Kvinnlig</option>
                        <option value="both">Båda</option>
                        <option value="other">Annan</option>

                    </select></td>
            </tr>
            <tr>
                <td><input type="submit" value="Filtrera" class="buttonBlue"></td>
            </tr>
        </tbody>
    </table>
</form>