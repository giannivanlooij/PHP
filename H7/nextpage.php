<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beveiligde pagina</title>
</head>
<body>
    <?php

if(isset($_GET["loguit"])) {
    $_SESSION = array();
    session_destroy();
}
    echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
    if ($_SESSION["role"]  == "admin") {
        echo "welkom";
        echo "<p><a class=welkom href=loginH7.html?loguit>uitloggen</a></p>"; 
    } else {
       echo "helaas. u heeft geen toegang";
       echo "<br>";
       echo "<p><a class=welkom href=loginH7.html?loguit>uitloggen</a></p>";

    }



    ?>

</body>
</html>