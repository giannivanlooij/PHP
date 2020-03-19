

<!DOCTYPE html>
<html>
<head>
<title>PHP Opdracht 3</title>
<style>
img {
    width: 150px;
    height: 150px;
    margin: 5px;
    align : center;
}
body {
    margin: 5px;
}

</style>
</head>
<body>
<?php
echo "<center>";
for($i = 1; $i<=9 ;$i++)
    echo "<img src= 'img/apen/aap".$i.".jpg'>";
$bomen = array("img_0050.jpg", "lillypilly1.jpg", "Maranchery_Biyyam_Kayal_kandal.jpg", "weeping-elm.jpg", "weeping-elm0091.jpg");
foreach($bomen as $boom) {
    echo "<img src='img/bomen/".$boom."'>";  
}
echo "<center>";
echo "<br>";
$christmastree = array("*", "**", "***", "****", "*****", "******", "*******", "********", "*********", "**********", "***", "***", "***");
foreach($christmastree as $tree) {
    echo $tree; 
    echo "<br>";
}
for($X = 35; $X>=25 ;$X--)
    echo "hoppelepee \n";
?>
</body>
</html>