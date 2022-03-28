<?php
$conn = create_conn(); // mysqli objekt
  //$user = $_SESSION['user']; // hämta användarnamn från aktiv session fel i loggen
  $sql = "SELECT * FROM users WHERE username = ?"; // ? är en placeholder
  $stmt = $conn->prepare($sql); // “Konvertera SQL till C-kod” returnerar mysql_stmt objekt  prepare returnerar mysli_stmt objekt
  $stmt->bind_param("s", $user); // Mata in variabler (DROP TABLE funkar int i C) // mata in användarinmatad data i sql
  $stmt->execute(); // Kör sql kommandot - returnerar boolean (true/false)
  $result = $stmt->get_result(); // returnerar false eller mysqli_result objekt
  $row = $result->fetch_assoc(); //Ta ut datan från  mysqli_result objektet till en assArr

  print('<div class="profile-list"  >');
  print("<p>Användarnamn: " . $_SESSION["username_print"] . "<br>");
  print("<p>Riktigt namn: " . $_SESSION["realname_print"] . "<br>");
  print("<p>Email: " . $_SESSION["email_print"] . "<br>");
  print("<p>Zipcode: " . $_SESSION["zipcode_print"] . "<br>");
  print("<p>Bio: " . $_SESSION["bio_print"] . "<br>");
  print("<p>Salary: " . $_SESSION["salary_print"] . "<br>");
  print("<p>Preference: " . $_SESSION["preference_print"] . "<br>");
  print('</div>');
  print(' </div>');
  ?>