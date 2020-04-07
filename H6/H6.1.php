<?php
include_once "../includes/sql/queries.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hoofdstuk 6.1</title>
</head>
<body>
<style>
table, tr, td {
    border: solid 1px #30302f;
    border-collapse: collapse;
    padding: 8px;
}
td {
    width: 120px;
}
</style>
<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=schoolphp", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"."<br>";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }




    $query = "SELECT  * FROM cursist ORDER BY cursistnr + 0 asc ";;
    $stmt = $conn->prepare($query) or die ("error stmt");
    $stmt->execute() or die ("error execute");



    echo "<table>";
    echo "<tr>";
    echo "<td>". "<b>studentnummers</b>" ."</td>";
    echo "<td>". "<b>naam</b>" ."</td>";
    echo "<td>". "<b>achternaam</b>" ."</td>";
    echo "<td>". "<b>straat</b>" ."</td>";
    echo "<td>". "<b>postcode</b>" ."</td>";
    echo "<td>". "<b>plaats</b>" ."</td>";
    echo "<td>". "<b>geslacht</b>" ."</td>";
    echo "<td>". "<b>geboortedatum</b>" ."</td>";
    echo "</tr>";
    echo "</table>";

echo "<table>";

while ($array = $stmt->fetch()) {
    echo "<tr>";
    echo "<td>". $array['cursistnr'] ."</td>";
    echo "<td>". $array['roepnaam'] ."</td>";
    echo "<td>". $array['naam'] ."</td>";
    echo "<td>". $array['straat'] ."</td>";
    echo "<td>". $array['postcode'] ."</td>";
    echo "<td>". $array['plaats'] ."</td>";
    echo "<td>". $array['geslacht'] ."</td>";
    echo "<td>". $array['geb_datum'] ."</td>";
    echo "</tr>";
}
"<table>";

?>
</body>
</html>

<!-- $statement = "SELECT";
     $column = "*";
     $table = "cursist"; -->


<!-- <?php
// executes querry
function querryexe($statement, $column, $table, $conn) {
    $query = "$statement  $column FROM $table";
    $stmt = $conn->prepare($query) or die ("error stmt");
    $stmt->execute() or die ("error execute");
    return $stmt;
}
?> -->