<?php
$conn = create_conn();
function inputRealname($x)
{
  $cars = array("", "Manlig", "Kvinnlig", "Båda", "Annan",  "Alla");
  return $cars[$x];
}

function preferenceValue()
{
  $x = 1;
  if (isset($_REQUEST["pref"]) && $_REQUEST["pref"] == "male") {
    $x = 1;
  }
  if (isset($_REQUEST["pref"]) && $_REQUEST["pref"] == "female") {
    $x = 2;
  }
  if (isset($_REQUEST["pref"]) && $_REQUEST["pref"] == "both") {
    $x = 3;
  }
  if (isset($_REQUEST["pref"]) && $_REQUEST["pref"] == "other") {
    $x = 4;
  }
  if (isset($_REQUEST["pref"]) && $_REQUEST["pref"] == "all") {
    $x = 5;
  }
  return $x;
}

//Preferens 
if (isset($_REQUEST['pref']) && ($_REQUEST["pref"] != "not")) {
  print("Preferens...<br>");

  //Preferens 5 / 
  if (isset($_REQUEST['adQuantity']) && ($_REQUEST['adQuantity'] == "5")) {
    //Preferens 5 alla / 
    if (isset($_REQUEST['pref']) && ($_REQUEST["pref"] == "all")) {
      $sql =  "SELECT * FROM `users` ORDER BY `users`.`preference` ASC LIMIT 5";
    }
    //Preferens 5 man / 
    if (isset($_REQUEST['pref']) && ($_REQUEST["pref"] == "male")) {
      $x = preferenceValue();
      $sql = "SELECT * FROM users WHERE preference = $x  ORDER BY username LIMIT 5";
    }
    //Preferens 5 kvinna / 
    if (isset($_REQUEST['pref']) && ($_REQUEST["pref"] == "female")) {
      $x = preferenceValue();
      $sql = "SELECT * FROM users WHERE preference = $x  ORDER BY username LIMIT 5";
    }
    //Preferens 5 båda/
    if (isset($_REQUEST['pref']) && ($_REQUEST["pref"] == "both")) {
      $x = preferenceValue();
      $sql = "SELECT * FROM users WHERE preference = $x  ORDER BY username LIMIT 5";
    }
    //Preferens 5 annan/ 
    if (isset($_REQUEST['pref']) && ($_REQUEST["pref"] == "other")) {
      $x = preferenceValue();
      $sql = "SELECT * FROM users WHERE preference = $x  ORDER BY username LIMIT 5";
    }
  }

  //Preferens Max
  if (isset($_REQUEST['adQuantity']) && ($_REQUEST['adQuantity'] == "Max")) {
    //Preferens Max alla / 
    if (isset($_REQUEST['pref']) && ($_REQUEST["pref"] == "all")) {
      $sql =  "SELECT * FROM `users` ORDER BY `users`.`preference` ASC ";
    }
    //Preferens Max man / 
    if (isset($_REQUEST['pref']) && ($_REQUEST["pref"] == "male")) {
      $x = preferenceValue();
      $sql =  "SELECT * FROM `users` ORDER BY `users`.`preference` ASC LIMIT 5";
    }
    //Preferens Max kvinna / 
    if (isset($_REQUEST['pref']) && ($_REQUEST["pref"] == "female")) {
      $x = preferenceValue();
      $sql = "SELECT * FROM users WHERE preference = $x  ORDER BY username ";
    }
    //Preferens Max båda/
    if (isset($_REQUEST['pref']) && ($_REQUEST["pref"] == "both")) {
      $x = preferenceValue();
      $sql = "SELECT * FROM users WHERE preference = $x  ORDER BY username ";
    }
    //Preferens Max annan/ 
    if (isset($_REQUEST['pref']) && ($_REQUEST["pref"] == "other")) {
      $x = preferenceValue();
      $sql = "SELECT * FROM users WHERE preference = $x  ORDER BY username ";
    }
  }

  fetchAndWrite($sql);
}

//Riks 

else if ((isset($_REQUEST['salary']) && ($_REQUEST["salary"] != "not")) && (!isset($_SESSION["username_print"]))) {
  print("Log in to use salary filter ...<br>");
} else if ((isset($_REQUEST['salary']) && ($_REQUEST["salary"] != "not")) && (isset($_SESSION["username_print"]) && ($_SESSION["username_print"] != ""))) {
  print("Riks ...<br>");
  //Riks 5
  if (isset($_REQUEST['adQuantity']) && ($_REQUEST['adQuantity'] == "5")) {
    if (isset($_REQUEST["salary"]) && $_REQUEST["salary"] == "rich") {
      $sql = " SELECT * FROM `users` ORDER BY `users`.`salary` DESC LIMIT 5";
    } else if (isset($_REQUEST["salary"]) && $_REQUEST["salary"] == "poor") {
      $sql = " SELECT * FROM `users` ORDER BY `users`.`salary` ASC LIMIT 5";
    }
  }
  //Riks Max
  else if (isset($_REQUEST['adQuantity']) && ($_REQUEST['adQuantity'] == "Max")) {
    if (isset($_REQUEST["salary"]) && $_REQUEST["salary"] == "rich") {
      $sql = " SELECT * FROM `users` ORDER BY `users`.`salary` DESC ";
    } else if (isset($_REQUEST["salary"]) && $_REQUEST["salary"] == "poor") {
      $sql = " SELECT * FROM `users` ORDER BY `users`.`salary` ASC ";
    }
  }
  fetchAndWrite($sql);
}

//populära 
else if (isset($_REQUEST['likes']) && ($_REQUEST["likes"] != "not")) {
  print("Populära ...<br>");
  //populära 5
  if (isset($_REQUEST['adQuantity']) && ($_REQUEST['adQuantity'] == "5")) {
    if (isset($_REQUEST["likes"]) && $_REQUEST["likes"] == "pop") {
      $sql = " SELECT * FROM `users` ORDER BY `users`.`likes` DESC LIMIT 5";
    } else if (isset($_REQUEST["likes"]) && $_REQUEST["likes"] == "notpop") {
      $sql = " SELECT * FROM `users` ORDER BY `users`.`likes` ASC LIMIT 5";
    }
  }
  //populära Max
  if (isset($_REQUEST['adQuantity']) && ($_REQUEST['adQuantity'] == "Max")) {
    if (isset($_REQUEST["likes"]) && $_REQUEST["likes"] == "pop") {
      $sql = " SELECT * FROM `users` ORDER BY `users`.`likes` DESC ";
    } else if (isset($_REQUEST["likes"]) && $_REQUEST["likes"] == "notpop") {
      $sql = " SELECT * FROM `users` ORDER BY `users`.`likes` ASC ";
    }
  }
  fetchAndWrite($sql);
} else {
  print("Default filter 5 ...<br>");
  $sql =  "SELECT * FROM `users` ORDER BY `users`.`preference` ASC LIMIT 5 ";
  fetchAndWrite($sql);
}


function fetchAndWrite($sql)
{
  $conn = create_conn();
  if ($result = $conn->query($sql)) {
    //skapa en while loop för att hämta varje rad!
    while ($row = $result->fetch_assoc()) {
      //skriv ut endast ett värde (en kolum en rad -- en cell)

      print("<div class='recipes-list '>");
      print("Namn: " . $row['realname'] . "<br>");
      print("Bio: " . $row['bio'] . "<br>");
      print("Preferens:  " . inputRealname($row['preference']) . "<br>");
      print("Likes:  " . $row['likes'] . "<br>");
      if (isset($_SESSION["loggit"]) && $_SESSION["loggit"] == "loggitin") {
        print("Salary:  " . $row['salary'] . "<br>");
        print("E-post:  " . $row['email'] . "<br>");
      }

      include "Comment_Like_DislikeButton.php";
      print("</div>");
      print("<br>");
    }
  } else {
    print("Något gick fel, query metoden senaste felet : " . $conn->error);
  }
}
