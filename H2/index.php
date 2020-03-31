<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hoofdstuk 2</title>
</head>
<body>
<?php
$a = "Ik heb niet gefaald.";
$b = "die niet werken";
$c = 10000;

echo nl2br ($a." Ik heb alleen ".$c." manieren gevonden die niet werken. \n -Thomas Edison") ;
?>

<br>
<br>

<?php
$a = "die geen fout";
$b = "en";
$c = "niet";

echo nl2br ("mensen ".$a."en maken werken ".$c." \n -Albert Plesman");
?>

<br>
<br>

<?php
$a = "ry";
$b = "but";
$c = "fail";

echo nl2br  ("t".$a." and ".$c.", ".$b." never ".$c." to t".$a. "\n -Tyra Banks");
?>

<br>
<br>

<?php
$a = "\"omgaan";
$b = "met";
$c = "teleu";

echo nl2br  ("De cursus ".$a." ".$b." ".$c."rstellingen"."\""." Kan vanavond helaas niet doorgaan. \n - Herman Finkers");
?>
</body>
</html>