<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
echo "<h1 style=background-color:black;color:yellow; align=center>Welcome to Quiz App</h1>";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/* 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_management";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Welcome to database";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
} */