<?php
require "database.php";


if (!isset($_GET["id"])) {
    echo "er is geen ID gevonden";
    exit;
}

$id = $_GET["id"];
$sql = "DELETE FROM tools WHERE tool_id = $id";

// "daad werkelijk verwijderen"
// mysqli_query($conn, $sql);
header ("location: tools_index.php");