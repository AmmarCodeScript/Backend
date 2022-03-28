<div class="myDIVClass">
    <form action="#" method="post">
        <table>
            <tbody>
                <tr>
                    <td>

                        <img src="https://img.icons8.com/fluency-systems-filled/24/000000/comments--v1.png" />
                    </td>
                    <td>
                        <h3>Add comment</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Name</p>
                    </td>
                    <td> <?php if ($_SESSION["username_print"] == "") {
                                print("<p class='inputNamn' name='ema'> log in to comment </p>");
                            } else {
                                print("<p class='inputNamn' name='ema'>" . $_SESSION["username_print"] . "</p>");
                            } ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Text</p>
                    </td>
                    <td><input type="text" name="addCommentText" id=""></td>
                </tr>
            </tbody>
        </table>
        <input type="hidden" name="CommentName" value="name">
        <input type="hidden" name="CommentText" value="text">
        <input type="submit" class="button" value="Add text">
    </form>
</div>

<?php

if ((isset($_REQUEST["CommentName"]) && ($_REQUEST["CommentName"] == "name")) && isset($_REQUEST["CommentText"]) && ($_REQUEST["CommentText"] == "text")) {
  //  $addCommentName = $_REQUEST["addCommentName"];
    if ($_SESSION["username_print"] == "") {
        $addCommentName = $_REQUEST[""];
    }
    if ($_SESSION["username_print"] != "") {
        $addCommentName = $_SESSION["username_print"];
    }

    $addCommentText = $_REQUEST["addCommentText"];
    $addCommentId = $chatId;
    if (
        $addCommentName != ""
        && $addCommentText != ""
        && $addCommentId != ""
    ) {
        if ($_SESSION["username_print"] == "") {
            $addCommentName = $_REQUEST["addCommentName"];
        }
        if ($_SESSION["username_print"] != "") {
            $addCommentName = $_SESSION["username_print"];
        }
        // Koppla till databasen
        $conn = create_conn();
        $addCommentName = test_input($addCommentName);
        $addCommentText = test_input($_REQUEST['addCommentText']);
        $addCommentId = test_input($chatId);
        $comment = $addCommentText;
        $profile_id = $addCommentId;
        $namn = $addCommentName;

        $statement = $conn->prepare("INSERT INTO comments ( comment, profile_id,namn) VALUES (?,?,?)");
        $statement->bind_param("sis", $comment, $profile_id, $namn);
        if ($statement->execute()) {
            print("<br> comment registered!");
            session_unset($_REQUEST["CommentName"]);
            session_unset($_REQUEST["CommentText"]);
            
        }
    } else {
        print(" <br> You can not register the same name or blank input!");
        //    DELETE FROM `users` WHERE `users`.`id` = 35;
    }

    $conn->close();
}
