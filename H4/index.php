<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hoofdstuk 4</title>
</head>
<body>
<style>
form {
    margin-bottom: 5px;
}
</style>
<h2> Mijn input versie van de opdracht:</h2>
<form>
    <input type = "text" name="celsius" placeholder = "voer graden celsius in">
    <button type="submit" name="submit" value="submit">bereken</button>
</form>
<?php

if(isset($_GET["submit"])) {
    $fahrenheit = $_GET["celsius"];
    echo "het aantal fahrenheit: ", $fahrenheit  * 9 / 5 + 32;;
}
echo "<br>";
echo "<br>";
echo "<h2> hier is de orginele opdracht met de functie:</h2>";
    



//de opdracht
function calc($c) {
   $far = $c * 9 / 5 + 32;
   echo $far;
}
$c = 10;
calc($c);

echo "<br>";
echo "<br>";

echo "<h2> hier zijn de overige opdrachten:</h2>";
echo "<h3> de boolean opdracht:</h3>";

$num = 3;

function devide3check($num) {
    if($num % 3 == 0) {
        $deelbaar = true;
    } else {
        $deelbaar = false;
    }
    return $deelbaar;
}

 echo devide3check($num);

 echo "<br>";

 echo "<h3> de woord-draai opdracht:</h3>";

    



$woord = ("vul hier het woord in");

function draaien($woord) {
$gedraaid = strrev($woord);
echo $gedraaid;
}

draaien($woord);
?>
</body>
</html>