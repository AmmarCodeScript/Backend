<?php

print(" <div  class='recipes-list2 '>");
print("<a class='buttonBlue' style= 'width: 60px; height: 18px;'    href='./uppgift3_profile.php?chatUser=" . $row["username"] . "&commentId=" . $row["id"] . " '>Comment</a>");
print("<form action='#' method='get'>");
print("<input type='hidden' name='CommentLikes' value='likes'>");
print("<input type='hidden' name='Likes' value=". $row["likes"] .">");
print("<input type='hidden' name='Id' value=". $row["id"] .">");
print("<input type='submit' class='buttonGreen' value='Likes'>");
print("</form>");
print("<form action='#' method='get'>");
print("<input type='hidden' name='CommentDislikes' value='dislikes'>");
print("<input type='hidden' name='Likes' value=". $row["likes"] .">");
print("<input type='hidden' name='Id' value=". $row["id"] .">");
print("<input type='submit' class='buttonRed' value='Dislikes'>");
print("</form>");
print(" </div>");
