<?php
$databaseHost = "localhost:3307";
$databaseName = "kampusuniska";
$databaseUsername = "root";
$databasePassword = "";

$con = mysqli_connect("$databaseHost", "$databaseUsername", "$databasePassword", "$databaseName");

if (mysqli_connect_errno()) {
    echo "<h1>Koneksi Database ERROR : " . mysqli_connect_errno() . "</h1>";
}
