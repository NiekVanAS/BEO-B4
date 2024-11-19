<?php



var_dump($_POST);

$firstname = $_POST['name'];
$lastname = $_POST['achter'];
$tussen = $_POST['tussen'];

$straat =  $_POST['straat'];
$homenumber = $_POST['huisnummer'];
$zipcode = $_POST['postcode'];
$place = $_POST['plaats'];
$country =$_POST['land'];



require "database.php";

$sql =  "INSERT INTO users(firstname, lastname, infix, street, house, city, country, zipcode) 
VALUES ('$firstname', '$lastname', '$tussen', '$straat', '$homenumber', '$place', '$country', '$zipcode')";

mysqli_query($conn, $sql);