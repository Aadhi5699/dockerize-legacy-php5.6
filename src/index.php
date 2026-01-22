<?php

require "legacy-logic.php";

$host = "mysql";
$user = "user";
$pass = "password";
$db   = "legacydb";

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Safe query
$sql = "SELECT NOW() AS `current_time`";

$result = $mysqli->query($sql);

if (!$result) {
    die("Query failed: " . $mysqli->error);
}

$row = $result->fetch_assoc();

echo "<h1>Legacy PHP 5.6 App Running in Docker</h1>";
echo "Server Time: " . $row["current_time"];
