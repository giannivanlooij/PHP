<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP hoofdstuk 3.6</title>
</head>
<body>
<style>
img {
    height: 50px;
    width: 50px;
    margin-left:15px;
}
td {
    border: solid black 1px;
}
#whitelines{
    border:solid white 1px;
}
</style>
<table>
<?php
    $zwemclubs = array(
        "De spartelkeukens" => 25,
        "De waterbuffels" => 32,
        "Plonsmderin" => 11,
        "Bommetje" => 23
);
foreach ($zwemclubs as $clubs => $leden){
    //table row
    echo"<tr>";

    //aantal clubs
    echo"<td>$clubs</td>";

    //aantal leden
    echo"<td>$leden</td>";

    //zwemplaatjes
    echo"<td id=whitelines>";
    $plaatjes = floor($leden / 5);
    for ($i=0; $i <$plaatjes ; $i++) { 
        echo'<img src="../fotos/zwemmer.png" alt="plaatje">';
    }   
}       
    //einde tablerow
    echo"</tr>"
?>
</table>
</body>
</html>