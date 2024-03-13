<?php
require 'database.php';


$sql = "SELECT * FROM tools";
$result = mysqli_query($conn, $sql);
$tools = mysqli_fetch_all($result, MYSQLI_ASSOC);
// var_dump($tools);
if (empty($tools)) {
    echo "er zijn geen drivers beschikbaar";
    exit;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tools</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="cards">
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>naam</th>
                    <th>categorie</th>
                    <th>prijs</th>
                    <th>merk</th>
                    <th>Afbeelding</th>
                    <th>link</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($tools as $tool) : ?>
                    <tr>
                        <td> <?php echo $tool["tool_id"] ?> </td>
                        <td> <?php echo $tool["tool_name"] ?> </td>
                        <td> <?php echo $tool["tool_category"] ?> </td>
                        <td> <?php echo $tool["tool_price"] ?> </td>
                        <td> <?php echo $tool["tool_brand"] ?> </td>
                        <td> Afbeelding: <img src="images/<?php echo $tool["tool_afbeelding"] ?>" alt="www/images">
                        </td>
                        <td><a href="tools_details.php?tool_id=<?php echo $tool["tool_id"] ?>">Product Details</a></td>
                        <td><a href="tool_delete.php?id=<?php echo $tool["tool_id"] ?>" class="delete">Delete</a></td>

                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>