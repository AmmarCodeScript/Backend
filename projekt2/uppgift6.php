<?php
$restartpage = false;
function inputRealname()
{
    $cars = array("", "Man", "Kvinna", "Båda", "Annat", "Alla");
    if ($_SESSION["preference_print"] == "") {
        $x = 0;
    } else {
        $x = $_SESSION["preference_print"];
    }
    return $cars[$x];
}
?>


<div class="myDIVClass">
    <div class="hidTask6">
        <form action="#" method="post" style="padding-left: 10x;">
            <table>
                <tbody>
                    <tr>
                        <td><input type="hidden" name="stage" value="change"><img src="https://img.icons8.com/ios-glyphs/30/000000/change-user-male.png" /></td>
                        <td><?php print("<p  '>" . "Welcome " . $_SESSION["username_print"] . "  here you can modify your account " . "</p>"); ?></td>
                    </tr>
                    <tr>
                        <td>
                            <p>Användarnamn:</p>
                        </td>
                        <td> <?php print("<p class='inputNamn' name='usr'>"  . $_SESSION["username_print"] . "</p>"); ?> </td>

                    </tr>
                    <tr>
                        <td>
                            <p>Riktigt namn:</p>
                        </td>
                        <td> <?php print("<input type='text' name='RikN' value=" . $_SESSION["realname_print"] . ">"); ?> </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Email:</p>
                        </td>
                        <td> <?php print("<p class='inputNamn' name='ema'>" . $_SESSION["email_print"] . "</p>"); ?> </td>

                    </tr>
                    <tr>
                        <td>
                            <p>Zipcode:</p>
                        </td>
                        <td> <?php print("<input type='number' name='pos' value=" .  $_SESSION["zipcode_print"] . ">"); ?> </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Annonstext:</p>
                        </td>
                        <td> <?php print("<input type='text' name='ann' value=" .  $_SESSION["bio_print"] . ">"); ?> </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Salary:</p>
                        </td>
                        <td> <?php print("<input type='number' name='sal' value=" .  $_SESSION["salary_print"] . ">"); ?> </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Preference:</p>
                        </td>
                       
                        <td><?php print("
                        <select id='Preferens' name='pre' class='select2' value=" . inputRealname() . ">
                        <option value='' disabled selected>". inputRealname() ."</option>
                        <option value='1'>Man</option>
                        <option value='2'>Kvinaa</option>
                        <option value='3'>Båda</option>
                        <option value='4'>Annat</option>
                        <option value='5'>Alla</option>
                        </select>
                         "); ?> </td>
                    </tr>
                    <!-- <tr>
                    <td>Password:</td>
                    <td><input type="password" name="passord"></td>
                </tr>
                <tr> -->
                    <td> <input type="submit" value="Change" class="button">
                    </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>

<?php



if (isset($_REQUEST["stage"]) && $_REQUEST["stage"] == "change") {

    $conn = create_conn();

    $id = $_SESSION["id_print"];
    $realname = test_input($_REQUEST["RikN"]); //riktigt namn
    $zip = test_input($_REQUEST['pos']);       //pstnummer
    $bio = test_input($_REQUEST['ann']);      //annosnstext om dig 
    $salary =  test_input($_REQUEST['sal']);      //årslön
    $preference = test_input($_REQUEST['pre']);    //pereferns man eller kvinna
    if ($preference == ""){$preference = $_SESSION["preference_print"];}

    // för update till database
    $statement = $conn->prepare("UPDATE users SET realname = ?, zipcode = ?, bio = ?, salary = ?, preference = ? WHERE id = ?");
    $statement->bind_param("sisiii", $realname, $zip, $bio, $salary, $preference, $id);

    if ($statement->execute()) {
        print("Information has been changed");

        $_SESSION["realname_print"]     = $realname;
        $_SESSION["zipcode_print"]      = $zip;
        $_SESSION["bio_print"]          = $bio;
        $_SESSION["salary_print"]       = $salary;
        $_SESSION["preference_print"]   = $preference;

        
        $restartpage = true;
    }
  
} else {
    print(" <br> Something of your information is wrong or empty input");
    //    DELETE FROM `users` WHERE `users`.`id` = 35;
}
if ($restartpage == true){
    print("<br> restartpage worked");
    header('Refresh: 1; url=index.php');
    header('Location: index.php');}



?>