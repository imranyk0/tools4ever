<?php

require "database.php";

$sql = "SELECT MAX(tool_price) AS highest_price FROM tools";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);


// var_dump($data);

echo "de hoogste prijs is " . $data["highest_price"];
echo "<br>";
$sql = "SELECT COUNT(*) AS total_amount_tools FROM tools";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

echo "het aantal stukken gereedschap is " . $data["total_amount_tools"];