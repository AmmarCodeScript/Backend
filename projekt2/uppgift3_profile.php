<?php include "init.php" ?>
<?php include "head.php" ?>



<article>
   <div class="myDIVGreen">
      <h1>Profilesidan</h1>
      <?php
      function inputRealname($x)
      {
        $cars = array("", "Manlig", "Kvinnlig", "Båda", "Annan",  "Alla");
        return $cars[$x];
      }
      if (isset($_REQUEST["chatUser"]) && isset($_REQUEST["commentId"])) {
         $chatUser = test_input($_REQUEST["chatUser"]);
         $chatId = test_input($_REQUEST["commentId"]);
         $_SESSION["commentId"] = $chatId;
         $_SESSION["chatUser"] = $chatUser;
         $conn = create_conn();
         $sql = "SELECT * FROM users";
         if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_assoc()) {
               if ($chatUser == $row['username'] && $chatId == $row['id']) {
                  $row['username']  = $chatUser;
                  $row['id'] = $chatId;
                  print('<div class="myDIVGrey">');
                  print("Name: "  . $row['realname'] . "<br>");
                  print("Annosnstext: "  . $row['bio'] . "<br>");
                  print("Preferens:  " . inputRealname($row['preference']) . "<br>");
                 
                  print("Likes: " . $row['likes'] . "<br>");
                  if (isset($_SESSION["username_print"]) && $_SESSION["username_print"] != "") {
                     print("Lön: " . $row['salary'] . "<br> ");
                     print("E-post: " . $row['email'] . "<br>");
                  }
                  print('</div> ');
                  echo '<br>';
               }
            }
         }
         $conn->close();
      }



      include "chatText.php";
      include "addComment.php";

      if ($_SESSION["username_print"] != "") {
         include "signOut.php";
      }
      include "signOutTest.php";

      ?>




   </div>
</article>


<?php include "footer.php" ?>