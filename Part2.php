<?php
//Give the name of the program here - tennisClub
//Include your name and the date here - Erica, 8/10/25
//Give a brief description of what the program does - inserts member into database
$servername = "tennisclub";
$username = "root";
$password = "pass";
$dbname = "createTennisClubDB.sql";
$port = 3306;

date_default_timezone_set('Europe/Dublin');

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO member (firstname, surname) VALUES ('john', 'doe')";

mysqli_query($conn, $sql);

mysqli_close($conn);
?>
