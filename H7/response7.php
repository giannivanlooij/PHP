<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logged-in</title>
</head>
<body>
    <style>
        body {
    background: rgb(38,189,249);
    background: linear-gradient(76deg, rgba(38,189,249,1) 0%, rgba(112,214,237,1) 60%);
    position: relative;
}
.welkom {
    margin-left: 2%;
    margin-top: 5%;
}
.sorry {
    margin-left: 275px;
    margin-top: 175px;

} h3 {
    margin-left: 2%;
}
    </style>
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
    $query = "SELECT username, password, role FROM users";
    $stmt = $conn->prepare($query) or die ("error stmt");
    $stmt->execute() or die ("error execute");

    if(isset($_GET["loguit"])) {
        $_SESSION = array();
        session_destroy();
    }




    
    while ($array = $stmt->fetch()) {
        if ($_POST["email"]  == $array["username"] && $_POST["password"] == $array["password"]) {
            $_SESSION["user"] = $_POST["email"];
            $_SESSION["role"] = $array["role"];
            echo "<h2 class=welkom>welkom ".$_SESSION["user"]."</h2>";
            echo "<h3> jou rol is ".$array["role"]."</h2>";
            echo "<a class=welkom class=sorry href=\"nextpage.php\">the admin page</a>";
            echo "<br>";
            echo "<p><a class=welkom href=loginH7.html?loguit>uitloggen</a></p>";
            //destroy session
            return $array;
            
        }

    }
    if ($_POST["email"]  !== $array["username"] && $_POST["password"] !== $array["password"]) {
        echo "<h2 class=sorry>Sorry, de gebruikers naam of wachtwoord komen niet overeen.</h2>";
        echo "<a class=sorry href=\"loginH7.html\">Terug naar het formulier</a>";
        echo"<br>";
        echo"<br>";
    } 
?>
</body>
</html>
    
