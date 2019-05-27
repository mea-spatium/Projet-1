<?php
// Server
define('DB_SERVER', "measpatilpadmin.mysql.db");
define('DB_DATABASE', "measpatilpadmin");
define('DB_USERNAME', "measpatilpadmin");
define('DB_PASSWORD', "Database00");
// Create connection
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

?>