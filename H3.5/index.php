<!DOCTYPE html>
<html>
<head>
    <title>PHP Opdracht 3.5</title>
</head>
<body>
<h2>Bus reis opdracht. de opdracht zit in de code.</h2>
<?php
$leeftijd = 3;
$bedrag = 10;
if($leeftijd > 65) {
    $bedrag = $bedrag * 0.5;
}

if($leeftijd <= 12) {
    $bedrag = $bedrag * 0.5;
}

if($leeftijd < 3) {
     $bedrag = 0;
}
    echo $bedrag;
?>
</body>
</html>

<!-- een andere  versie -->

<!-- $bedrag = 10;
for($leeftijd = 1; $leeftijd <=70; $leeftijd++) {
    if($leeftijd < 3) {
        $bedrag = 0;
    }
    elseif($leeftijd <= 12) {
    $bedrag = 5;
    }
    elseif($leeftijd <= 65) {
        $bedrag = 10;
    }
    elseif($leeftijd > 65) {
        $bedrag = 5;
    }
    echo $bedrag;
    echo "<br>";
}
?> -->

