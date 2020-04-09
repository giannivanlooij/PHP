<?php


$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=accounts", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}


    $query = "SELECT username, password FROM users";
    $stmt = $conn->prepare($query) or die ("error stmt");
    $stmt->execute() or die ("error execute");

    while ($array = $stmt->fetch()) {
        if ($_POST["email"]  == $array["username"] && $_POST["password"] == $array["password"]) {
            echo "Welkom";
            echo "<br>";
            echo "<a href=\"login6.2.html\">Terug naar het formulier</a>";
            echo"<br>";
            echo"<br>";
            return $array;
        }
    }
    if ($_POST["email"]  !== $array["username"] && $_POST["password"] !== $array["password"]) {
        print "Sorry, geen toegang!";
        echo "<br>";
        echo "<a href=\"login6.2.html\">Terug naar het formulier</a>";
        echo"<br>";
        echo"<br>";
    } 
?>