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
echo "<h2> hier is de orginele opdracht met de functie</h2>";
    



//de opdracht
function calc($c) {
   $far = $c * 9 / 5 + 32;
   echo $far;
}
$c = 10;
calc($c);

echo "<br>";
echo "<br>";

// $num = 3;

// function devide3check($num) {
//     if($num % 3 = 0) {
//         $deelbaar = true;
//     } else {
//         $deelbaar = false;
//     }
//     return $deelbaar;

//     if(devide3check()) {
//         echo "yess";
//     } else {
//         echo "here we go again";
//     }

$woord = ("vul hier het woord in");

function draaien($woord) {
$gedraaid = strrev($woord);
echo $gedraaid;
}

draaien($woord);
?>
</body>
</html>