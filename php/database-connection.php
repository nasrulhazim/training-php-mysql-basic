<?php
/* MySQLi Object-Oriented */
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "<pre>Connected successfully with MySQLi Object-Oriented</pre>";

/* MySQLi Procedural */
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "<pre>Connected successfully with MySQLi Procedural</pre>";

/* PHP Data Object, PDO */
$servername = "localhost";
$username = "root";
$password = "";
$db = "training_intim";
try {
    $conn = new PDO("mysql:host=$servername;dbname=".$db, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<pre>Connected successfully with PHP Data Object, PDO</pre>"; 
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}