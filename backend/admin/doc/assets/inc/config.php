<?php
$dbuser = "root";  // mysqluser
$dbpass = "";      // password
$host = "localhost";
$db = "hmisphp";   // database name
$mysqli = new mysqli($host, $dbuser, $dbpass, $db);

// cheak connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} else {
    echo "Connection successful!";
}
?>
