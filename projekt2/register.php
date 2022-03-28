<form action="index.php" method="post">
    <table>
        <tbody>
            <tr>
                <td class="ts_style">Användarnamn </td>
                <td> <input placeholder="Namn" type="text" name="usr" style="margin-left: 30px;"><br></td>
            </tr>
            <tr>
                <td class="ts_style"> Lösenord </td>
                <td> <input placeholder="Ex. 123456_Mki!" type="password" name="psw" style="margin-left: 30px;"> </td>
            </tr>
            <tr>
                <td class="ts_style"> Riktigt namn</td>
                <td> <input placeholder="Hugo Boss " type="text" name="RikN" style="margin-left: 30px;"><br></td>
            </tr>
            <tr>
                <td class="ts_style">Email </td>
                <td> <input placeholder="Exemple@dot.com" type="email" name="ema" style="margin-left: 30px;"><br></td>
            </tr>
            <tr>
                <td class="ts_style">Postnummer</td>
                <td> <input placeholder="12300" type="number" name="pos" style="margin-left: 30px;"><br></td>
            </tr>
            <tr>
                <td class="ts_style">Annonstext</td>
                <td> <input placeholder="Vem är du?" type="text" name="ann" style="margin-left: 30px;"><br></td>
            </tr>
            <tr>
                <td class="ts_style">Årslön</td>
                <td> <input placeholder="1900 €" type="number" name="sal" style="margin-left: 30px;"><br></td>
            </tr>
            <tr>
                <td class="ts_style"><label for="Preferens">Preferens</label></td>
                <td>
                    <select id="Preferens" name="pre" class="select">
                        <option value="1">Man</option>
                        <option value="2">Kvinaa</option>
                        <option value="3">Båda</option>
                        <option value="4">Annat</option>
                        <option value="5">Alla</option>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>
    <input type="hidden" name="stage" value="register">
    <input type="submit" value="Registera dig" class="button">
</form>
<?php

//$conn = create_conn();
//$sql = "SELECT * FROM users";

//kolla att man klickat submit!

$USER = $_REQUEST["usr"];
$PASS = $_REQUEST["psw"];
$RIK = $_REQUEST["RikN"];
$EMA = $_REQUEST["ema"];
$POS = $_REQUEST["pos"];
$ANN = $_REQUEST["ann"];
$SAL = $_REQUEST["sal"];
$PRE = $_REQUEST["pre"];
$TEST = "Nej";
if (isset($_REQUEST["usr"]) && isset($_REQUEST["psw"])) {

    // tester om user finns på data basen ->
    if ($result = $conn->query($sql)) {
        while ($row = $result->fetch_assoc()) {
            if ($USER == $row['username']) {
                $bossen = "Nej";
            }
           $_SESSION['test1'] = $bossen;
           // print_r($row);
        }
    }

    // tester om user finns på data basen ->

    // if ($_SESSION['test'] != "Nej" && $PASS != "") {
    if (
        $TEST != $_SESSION['test1'] 
        && $PASS != ""
        && $RIK != ""
        && $EMA != ""
        && $POS != ""
        && $ANN != ""
        && $SAL != ""
        && $PRE != ""
    ) {
        // Koppla till databasen
        $conn = create_conn();
        $username = test_input($_REQUEST['usr']); //användernamn
        $password = test_input($_REQUEST['psw']); // lösenord

        $RIK = test_input($_REQUEST["RikN"]);
        $EMA = test_input($_REQUEST["ema"]);
        $POS = test_input($_REQUEST['pos']);
        $ANN = test_input($_REQUEST['ann']);
        $SAL = test_input($_REQUEST['sal']);
        $PRE = test_input($_REQUEST['pre']);

        //$password = hash("sha256", $password);
        $password = hash("sha256", $password);
        // $password=password_hash($password,PASSWORD_DEFAULT);
        //sup3rHemlis = > asd123 - envägsalgoritm
        $realname = $RIK; //riktigt namn
        $email = $EMA;    //email
        $zip = $POS;       //pstnummer
        $bio = $ANN;      //annosnstext om dig 
        $salary =  $SAL;      //årslön
        $preference = $PRE;    //pereferns man eller kvinna
$likes = 0;
$id= null;

//INSERT INTO `users` (`id`, `username`, `realname`, `password`, `email`, `zipcode`, `bio`, `salary`, `preference`, `likes`) 
//VALUES (NULL, 'Namn', 'Huge', 'cadc6b726d2096b2882cecf9f290947be94796337869f26f63dca7e863270db3', 'h@hotmail.com', '123123', 'ammar1', '22', '1', '1');
        $statement = $conn->prepare("INSERT INTO   users (id, username, realname, password, email, zipcode, bio, salary, preference,likes) VALUES (?,?,?,?,?,?,?,?,?,? )");
        $statement->bind_param("issssisiii",$id, $username, $realname, $password, $email, $zip, $bio, $salary, $preference,$likes);

        if ($statement->execute()) {
            print("Du har registrerats!");
            $conn->close();
        }
       
        // else { print ("sorry du har en fel i registeringen!");}

    } else {
        print(" <br> Du kan inte registera samma namn eller tomt input");
        //    DELETE FROM `users` WHERE `users`.`id` = 35;
    }
}

?>