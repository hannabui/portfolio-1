<?php 
if(isset($_POST["password"])) {
    if($_POST["password"] == "Studioghibli") {
        echo("Welcome to the Studio Ghibli Gallery!");
    }
    else {
        echo("Please enter 'Studioghibli' and try again.");
    }
}
?>