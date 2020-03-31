<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP hoofdstuk 3.7</title>
</head>
<body>
<style>
    li, ul, h2 {
        text-align: center;
        list-style: none;
    }
    h2 {
        margin-top: 50px;
    }
</style>
<?php
    $kappersagenda = array(
        "9.15" => "mevr,pietersen",
        "9.30" => "mevr,willems",
        "9.45" => "",
        "10.00" => "paul van den broek",
        "10.15" => "karel de meeuw",
        "10.30" => ""
);
print("<h2>De volgende momenten zijn nog beschikbaar:</h2><ul>");

foreach ($kappersagenda as $tijd => $afspraak){

    if($afspraak == "") {

        print("<li>".$tijd."</li>");
    }

}
print("</ul>");
?>    
</body>
</html>