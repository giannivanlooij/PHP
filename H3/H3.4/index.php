<!DOCTYPE html>
<html>
<head>
    <title>PHP Hoofdstuk 3.4</title>
    <style>
        img {
            height: 250px;
            width: 250px;
        }
        body {
            text-align: center;
        }
        .rood {
            border:red solid 5px;
        }
        .groen {
            border:green solid 5px;
        }
    </style>
</head>
<body>
<?php
for($i = 1; $i <=9; $i++) {
    if($i % 2 == 0) {
        $class = "class='rood'";
        } else {
            $class = "class='groen'";
        }
         echo "<img ".$class. "src='/../../fotos/aap".$i.".jpg'>";
}         
?>
</body>
</html>