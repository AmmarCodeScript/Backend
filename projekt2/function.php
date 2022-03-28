<?php
function fetchAndWrite($sql)
{
  $conn = create_conn();
  if ($result = $conn->query($sql)) {
    //skapa en while loop för att hämta varje rad!
    while ($row = $result->fetch_assoc()) {
      //skriv ut endast ett värde (en kolum en rad -- en cell)
      print('<div class="recipes-list">');
      print("Namn: " . $row['username'] . "<br>");
      print("Bio: " . $row['bio'] . "<br>");
      print("Preferens:  " . inputRealname($row['preference']) . "<br>");
      if ($_SESSION["loggit"] == "loggitin") {
        print("Salary:  " . $row['salary'] . "<br>");
        print("E-post:  " . $row['email'] . "<br>");
      }
      print('</div>');
      echo '<br>';
    }
  } else {
    print("Något gick fel, query metoden senaste felet : " . $conn->error);
  }
}

?>