<?php
$conn = create_conn();
  //$sql = "SELECT * FROM comments";
 //$sql= "SELECT users.id = 2, comments.comment FROM users RIGHT JOIN comments ON users.id = comments.id ORDER BY users.id";
 $sql = " SELECT * FROM comments WHERE profile_id =1";
  fetchAndWrite($sql);

function fetchAndWrite($sql) {
  $conn = create_conn();
  if($result = $conn->query($sql)){
    //skapa en while loop för att hämta varje rad!
    while($row = $result->fetch_assoc()) {
    //skriv ut endast ett värde (en kolum en rad -- en cell)
    print('<div class="recipes-list">');

     print("Comment: ".$row['comment']."<br>");
     print("Id:  ".$row['id']."<br>");
     print("Från user id:  ".$row['profile_id']."<br>");
     print('</div>');
     echo '<br>';
}}
else { print("Något gick fel, query metoden senaste felet : ".$conn->error); }
}

?>