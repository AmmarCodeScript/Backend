<?php include "init.php" ?>
<?php include "head.php" ?>

<?php
print('<article>');
print(' <div class="myDIVClass">');
print('<h1>Profilesidan</h1>');

if ($_SESSION["username_print"] != "") {

  include "profileUser.php";
  include "deleteInlogged.php";
  include "uppgift6.php";
  include "signOut.php" ;

}
//else {(komma nästa gång)}

else {
  print '<div class="myDIVRed">';
  print " <h1>You do not have access to Profile. <br> You need to login to see your profile </h1>";
  print("<h3>" . "<a href='../projekt2/'>Project 2</a>" . "</h3>");
  print '</div>';
  print '<script> window.open("../projekt1/"); </script>';
}
print(' </article>');


?>

<?php include "footer.php" ?>