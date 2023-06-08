<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "trabalho-semestral";

$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
  die("Alguma coisa errada");
}

?>