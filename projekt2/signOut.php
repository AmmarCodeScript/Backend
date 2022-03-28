<!-- <div class="myDIVClass">
   <table>
      <tbody>
         <tr>
            <td>
            <img src="https://img.icons8.com/ios-filled/24/000000/logout-rounded.png"/>
            </td>
            <td>
               <h3>Sign out</h3>
            </td>
         </tr>
      </tbody>
   </table>
   <form action="index.php" method="post">
      <input type="hidden" name="stage" value="loggav">
      <input type="submit" class="buttonRed" value="Sign out">
   </form>

   <?php
   // if (isset($_REQUEST["stage"]) && $_REQUEST["stage"] == "loggav") {
   //    session_unset();
   //    session_destroy();
   //    header('Location: index.php');
   //    header("Refresh:1");
   // }
   ?>

</div> -->

<?php
print('<div class="myDIVClass" >');
print ' <form action="./inlog_test.php" method="post">';
print '<input type="hidden" name="stage"  value="loggav">';
print '<br>';
print '<input type="submit"  class="buttonRed" value="Loggav">';
print ' </form>';
print("</div>");

if (isset($_REQUEST["stage"]) && $_REQUEST["stage"] == "loggav") {
   print("loggar av in om 2 sekunder ...");
   session_unset();
   session_destroy();
   header('Location: #');
   print("work");
}
   ?>
