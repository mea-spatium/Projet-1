<?php
// Server
define('DB_SERVER', "localhost");
define('DB_DATABASE', "meadb");
define('DB_USERNAME', "root");
define('DB_PASSWORD', "");
// Create connection
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
$query = "SELECT * FROM articles";
if ($result = $db->query($query)) {
 
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["titre"];
        $field2name = $row["contenu"];
        $field3name = $row["created_at"];
    }
 
    echo '<b>'.$field1name.$field3name.'</b><br />';
}
?>

<div class="lele">
    <h2 class="tt">Live</h2>
    <p class="heure">
    <span style="color:coral;"><?php $time = date('H:i',time()); echo $time; ?></span>    Aliquam id semper lacus. Mauris pellentesque,
    </p>
</div>

