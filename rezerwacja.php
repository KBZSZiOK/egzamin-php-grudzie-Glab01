<?php
 if (isset($_POST["date"])){
    echo "Dodano rezerwację do bazy";

    $mysqli = new mysqli("localhost", "root", "", "baza");

    $query = "INSERT INTO REZERWACJE VALUES (DEFAULT, 1, " . $_POST["date"] . ", " . $_POST["guests"] . ", " . $_POST["telephone"].");";
    $mysqli->query($query);
    $mysqli->close();
 }
?>