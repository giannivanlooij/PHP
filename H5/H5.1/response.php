<?php


if ($_POST["name"] == "") {
     echo "je moet nog een naam invullen";
     echo "<br>";
     echo "<a href=\"form.html\">Terug naar het formulier</a>";
     echo"<br>";
     echo"<br>";
}
if ($_POST["adres"] == "") {
    echo "je moet nog een adres invullen";
    echo "<br>";
    echo "<a href=\"form.html\">Terug naar het formulier</a>";
    echo"<br>";
    echo"<br>";
}
if ($_POST["email"] == "") {
    echo "je moet nog een email invullen";
    echo "<br>";
    echo "<a href=\"form.html\">Terug naar het formulier</a>";
    echo"<br>";
    echo"<br>";
}
if ($_POST["password"] == "") {
    echo "je moet nog een wachtwoord invullen";
    echo "<br>";
    echo "<a href=\"form.html\">Terug naar het formulier</a>";
    echo"<br>";
    echo"<br>";
}

//work in progress
// if ($_POST["name"] && ["adres"] && ["email"] && ["password"] != "") {
//     echo "registratie voltooid";
// }
?>