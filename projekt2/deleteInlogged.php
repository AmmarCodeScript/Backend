<?php
function funUsername()
{
   if ($_SESSION["username_print"] == "") {
      $x = "Please sign in";
   } else {
      $x = $_SESSION["username_print"];
   }
   return $x;
} ?>

<div class="myDIVClass">
   <div>
      <form action="#" method="get" style="padding-left: 10x;">
         <table>
            <tbody>
               <tr>
                  <td><input type="hidden"><img src="https://img.icons8.com/material-sharp/24/000000/filled-trash.png" /></td>
                  <td><?php print("<p  '>" . "Welcome " . funUsername() . " you can delete your profile in this section" . "</p>"); ?></td>
               </tr>
               <tr>
                  <td> Login:</td>
                  <td> <?php print("<p class='inputNamn' name='login'>" . funUsername() . "</p>"); ?></td>
               </tr>
               <tr>
                  <td>Password:</td>
                  <td><input type="password" name="passord"><input type="hidden" name="stage" value="deleteProfile"></td>
               </tr>
               <tr>
                  <td> <input type="submit" value="Delete" class="button">
                  </td>
               </tr>
            </tbody>
         </table>
      </form>
   </div>
</div>

<?php

//$conn = create_conn();

if (isset($_REQUEST["stage"]) && $_REQUEST["stage"] == "deleteProfile" && $_SESSION["username_print"] != "") {
   // $USER = $_REQUEST["login"];  // 2 här spars namn till storge
   $USER = $_SESSION["username_print"];  // 2 här spars namn till storge

   $PASS = $_REQUEST["passord"];
   $PASS = hash("sha256", $PASS);
   $conn = create_conn();
   $sql = "SELECT * FROM users WHERE username = ? AND password = ? limit 1";

 //  if()

   $stmt = $conn->prepare($sql); // beskyte mot insjektion 
   $stmt->bind_param("ss", $USER, $PASS); //tar bort dårlig hackigs code 
   $stmt->execute(); // Kör sql kommandot - returnerar boolean (true/false)
   $result = $stmt->get_result(); // returnerar false eller mysqli_result objekt
   $row = $result->fetch_assoc(); //Ta ut datan från  mysqli_result objektet till en assArr

   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   }

   if ($row == true) {
      $id = $row["id"];


      $sql = "DELETE FROM `users` WHERE `users`.`id` = $id";
   }

   if ($conn->query($sql) === TRUE) {

      print('<p style="background-color: rgb(0 255 102 / 51%); border-radius: 5px; border: none; color: white; padding: 10px;">Record deleted successfully!</p>');
   } else {
      //echo "Error deleting record: " . $conn->error;

      print('<p style="background-color: rgb(255 0 0 / 51%); border-radius: 5px; border: none; color: white;padding: 10px;">Error deleting record</p>'
         . $conn->error);
   }

   $conn->close();



   if (isset($_REQUEST["stage"]) && $_REQUEST["stage"] == "deleteProfile") {
      print("loggar av in om 2 sekunder ...");
      session_unset();
      session_destroy();
      header('Location: #');
      //include "inloggning.php";
   }
}




/*
else if (
  !isset($_REQUEST["pas"]) && 
  !isset($_REQUEST["name"]) ) 
  { 
    print('<p style="    background-color: 
    border-radius: 5px;
    border: none;
    color: white;
    padding: 10px;">ingen input</p>');

  }
  
else{print('<p style="    background-color: rgb(255 0 0 / 51%);
    border-radius: 5px;
    border: none;
    color: white;
    padding: 10px;">Fel input!</p>');}

*/

?>