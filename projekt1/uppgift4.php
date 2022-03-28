
     <article>
     <div class="myDIV">
    <h1>Uppg 4 - Signup form </h1>
     <p>som skickar ett slumpmässigt lösenord i ett confirmation email  </p> <br>

    <form action="index.php" method="get">
    Användarnamn: <input type="text" name="username4"><br>
     E-mail: <input type="text" name="email4" style="margin-left: 55px;"><br>
    <input type="submit" value="Registera dig" class="button">
    </form>

<?php
        function randomPassword() {
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            $pass = array(); //remember to declare $pass as an array
            $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
            for ($i = 0; $i < 8; $i++) {
                $n = rand(0, $alphaLength);
                $pass[] = $alphabet[$n];
            }
            return implode($pass); //turn the array into a string
        }

    if (isset($_REQUEST["username4"]) && isset($_REQUEST["email4"])) {
    
      
        $usernamea = test_input($_GET["username4"]);
        $userEMAIL = test_input($_GET["email4"]);

        
        if ($usernamea != "" &&  $userEMAIL != "" ){
            $textrand = randomPassword();
            
            echo "<br>";
            echo "<br>";
        
            print '<div class="myDIVGreen">';
            print("Thank you for creating a, it will be sent to the email :" . $userEMAIL);
            echo "<br>";
            print("The password is = " . $textrand);
            print '</div>';
        
            // här kommer requset information.
            $email_name = ("Name : " . $usernamea);
            $email_email = ("E-post :" . $userEMAIL);
            $email_Pasword = ("Your password is : " . $textrand);
            
            
            $to = $userEMAIL; //"somebody@example.com";
            $subject = "Amppari back-end webb";
            $txt = $email_name . "\r\n" . $email_email . "\r\n" . $email_Pasword;
            $headers = "From: no-reply@arcada.fi";
            
            mail($to, $subject, $txt, $headers);

        }
        else {
            print '<div class="myDIVRed">';
            print("<p>please enter your name and email</p>");
            print '</div>';
            session_destroy($_REQUEST["username4"] );
            session_destroy( $_REQUEST["email4"]);
        }
    }
?>
                </div>
            </article>
