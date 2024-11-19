<?php

$dbname = "BEO-B4";
$WWpass = "password";

// Correct mysqli_connect parameters: host, username, password, database name
$conn = mysqli_connect("mariadb", "root", $WWpass, $dbname);

if (!$conn) {
    // Better error message
    die("Connection failed: " . mysqli_connect_error());
}