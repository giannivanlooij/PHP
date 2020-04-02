<?php

if ($_POST["email"]  == "piet@worldonline.nl" && $_POST["password"] == "doetje123") {
    echo "inloggen gelukt!";
} elseif ($_POST["email"]  == "klaas@carpets.nl" && $_POST["password"] == "snoepje777") {
    echo "inloggen gelukt!";
} elseif ($_POST["email"]  == "truushendriks@wegweg.nl" && $_POST["password"] == "arkiearkle201") {
    echo "inloggen gelukt!";
} else  {
    echo "niet ingelogd";
    echo "<br>";
    echo "<a href=\"form.html\">terug naar het inlogscherm.</a>";
}



$email = $_POST["email"];
$password = $_POST["password"];



    function naarbool($email, $password) {
        if (isset($email, $password)) {
             $bool = true;  
        } else {
            $bool = false;
        }
        return $bool; 
    } 
    echo "<p>boolean:</p>".naarbool($email, $password);





?>


