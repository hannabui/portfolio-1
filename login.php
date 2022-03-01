<?php 
if(isset($_POST["password"])) {
    if($_POST["password"] == "Studioghibli") {
        echo("Welcome to the Studio Ghibli Gallery!  ");
        echo 
        '<a href="gallery.html">
        Enter Gallery Here.
        </a>';
    }
    else {
        echo("Please enter 'Studioghibli' and try again.");
    }
}
?>