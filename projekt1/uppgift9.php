<article>
    <!--uppgift 9 börjaer här-->
    <div class="myDIV">
        <h1>Uppgift 9 - Gästbok</h1>
        <p>där kommentarer lagras i en fil (utvecklas senare till blogg/comments)</p>
        <form action="index.php" method="post" name="guest">
            Name: <input type="text" name="name_one" />
            <br> <br>
            Message: <br> <br>
            <textarea cols="50" name="message_one" rows="10">  </textarea> <br>
            <input type="submit" name="submit_one" value="Sign this in the Book" class="button" />
        </form>
        <a href="comment.log" target="blank">History Comment logg</a>
        <?php
        $name_one = test_input($_REQUEST['name_one']);
        $message_one = test_input($_REQUEST["message_one"]);
        if (isset($_REQUEST["submit_one"]) && isset($name_one) && isset($message_one)) {
            $tid_one = " KL: " . date("H:i:s");
            $alt_one = "Namn : " . $name_one . " KL: " . date("H:i:s") . " Meddelande : " . $message_one;
            $fileContent = file_get_contents("comment.log");
            file_put_contents("comment.log", $alt_one . "\n" . $fileContent);
        }
        $comment_file = array_slice(file('comment.log'), 0, 5);
        foreach ($comment_file as $comment) {
            print '<div class="myDIVGreen">';
            print($comment . "<br>");
            print '</div>';
        }

        ?>
    </div>
</article>