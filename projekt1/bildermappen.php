<?php
session_start();
include "functions.php"
?>


<?php //include "function.php"?>
<?php //include "navbar.php" ?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Back-end kurs</title>
		<link rel="stylesheet" href="../css/style.css" />
	</head>

    <body>

    <article>
            <div class="myDIVClass">
            <?php

$dirname = "uploads/";
$images = glob($dirname."*.png");

foreach($images as $image) {
    echo '<img src="'.$image.'" /><br />';
}

//
$imagesa = glob($dirname."*.jpg");

foreach($imagesa as $image) {
    echo '<img src="'.$image.'" /><br />';
}
//
$imagesa = glob($dirname."*.JPG");

foreach($imagesa as $image) {
    echo '<img src="'.$image.'" /><br />';
}

//
$imagesb = glob($dirname."*.jpeg");

foreach($imagesb as $image) {
    echo '<img src="'.$image.'" /><br />';
}


      ?>

</div>
<?php

?>
</article>

    </body>
</html>