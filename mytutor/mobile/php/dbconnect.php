<?php
$servername = "localhost";
$username   = "moneymon_mytutor";
$password   = "yj!CQK,xB1d1";
$dbname     = "moneymon_276876_mytutor_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>