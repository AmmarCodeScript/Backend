<?php
         $conn = create_conn();
         $sql = " SELECT * FROM comments WHERE profile_id =$chatId";
         fetchAndWrite($sql);
         function fetchAndWrite($sql)
         {
            $conn = create_conn();
            if ($result = $conn->query($sql)) {
               //skapa en while loop för att hämta varje rad!
               while ($row = $result->fetch_assoc()) {
                  //skriv ut endast ett värde (en kolum en rad -- en cell)
                  print(' <div class="recipes-list">');
                  print("Name: " . $row['namn'] . "<br>");
                  print("Text: " . $row['comment'] . "<br>");
                 
                  print('</div>');
                  echo '<br>';
               }
            } else {
               print("Något gick fel, query metoden senaste felet : " . $conn->error);
            }
         }
         $conn->close();
      