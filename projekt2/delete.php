<?php
//DELETE FROM `users` WHERE `users`.`id` = 70;

//print("<a class='b_close'  href='./uppgift3_profile.php?delete=".$row["username"]."  '>Radera</a>");
?>
<!-- 
<form action="uppgift3_profile.php" method="get">
<input placeholder="Namn" type="text" name="name"> <br>
<input placeholder="Lösenord"  type="text" name="pas"> <br>
<input type="submit"   value="Radera" class="b_close">
</form>

 -->
 <div id="deleteButtonId">
   <form action="#" method="get" style="padding-left: 10x;">
      <table>
         <tbody>
            <tr>
               <td> Login:</td>
               <td>
                  <input type="text" name="login" ><br> <!--1 kommer in namn--> 
               </td>
            </tr>
            <tr>
               <td>Password:</td>
               <td> 
                  <input type="text" name="passord" ><input type="hidden" name="stage" value="deleteProfile"><br>
               </td>
            </tr>
            <tr>
               <td>
                  <input  type="submit" value="Delete" class="button" 
                     style= 
                     "background-color: rgb(255 0 0 / 51%); 
                     border: none;  
                     border-radius: 12px; 
                     color: white; font-weight: bold; 
                     letter-spacing: 1px; 
                     text-decoration: none; 
                     padding: 8px; border-bottom: 
                     solid rgba(0, 0, 0, 0.1);">
               </td>
            </tr>
         </tbody>
      </table>
   </form>
</div>

<?php



//$conn = create_conn();

if (isset($_REQUEST["stage"]) && $_REQUEST["stage"] == "deleteProfile") {
  $USER = $_REQUEST["login"];  // 2 här spars namn till storge
  $PASS = $_REQUEST["passord"];
  $PASS = hash("sha256", $PASS);
  $conn = create_conn();
  $sql = "SELECT * FROM users WHERE username = ? AND password = ? limit 1"; 

  $stmt = $conn->prepare($sql); // beskyte mot insjektion 
  $stmt->bind_param("ss",$USER , $PASS); //tar bort dårlig hackigs code 
  $stmt->execute(); // Kör sql kommandot - returnerar boolean (true/false)
  $result = $stmt->get_result(); // returnerar false eller mysqli_result objekt
  $row = $result->fetch_assoc(); //Ta ut datan från  mysqli_result objektet till en assArr
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if ($row == true){ 
    $id=$row["id"];
   

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
