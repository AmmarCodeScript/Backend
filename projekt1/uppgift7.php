<article>
    <div class="myDIV">
        <h1>Uppgift 7 - Ladda upp bild</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload: <br> <br>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submita" class="button">
        </form>

        <?php
        echo "<br>";
        print('<a href="bildermappen.php" target="blank">för att se alla bild uppladning</a>');

        ?>
        <p>till servern (för att senare kunna lägga till en profilbild)</p>
    </div>
</article>