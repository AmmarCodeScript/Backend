<?php 
        
if ((isset($_REQUEST["CommentLikes"]) && ($_REQUEST["CommentLikes"] == "likes")) || isset($_REQUEST["CommentDislikes"]) && ($_REQUEST["CommentDislikes"] == "dislikes")) {
    
    $likesNumber = $_REQUEST["Likes"];
    $id = $_REQUEST["Id"];

    if ($_SESSION["username_print"] != "" ) {
            if ($likesNumber != ""&&$id !="") {
                    if((isset($_REQUEST["Likes"]) )&& isset($_REQUEST["CommentLikes"]) && ($_REQUEST["CommentLikes"] == "likes")){$likesNumber += 1;}
                    if((isset($_REQUEST["Likes"])) && isset($_REQUEST["CommentDislikes"]) && ($_REQUEST["CommentDislikes"] == "dislikes")){$likesNumber -= 1; }
                $conn = create_conn();
                $id=test_input($_REQUEST["Id"]);
                $likesNumber = test_input($likesNumber);
                print("id = " . $id);
                print("likesNumber = ".  $likesNumber);
        
            $statement = $conn->prepare("UPDATE users SET likes = ? WHERE users. id = ?");
                $statement->bind_param("ii", $likesNumber,$id);
                if ($statement->execute()) {
                    print("<br> LIKE = " . $likesNumber);
                }
            } 
            else {print(" <br> You can not add liks/dislikes!");}
            $conn->close();
    }
}
else {print(" <br> Login to like");}

?>
