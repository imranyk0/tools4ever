<?php
require 'database.php';
// print_r($_GET);

$id = $_GET['tool_id'];

$sql = "SELECT * FROM tools WHERE tool_id = $id";
$result = mysqli_query($conn, $sql);
$tool = mysqli_fetch_assoc($result);
// var_dump($driver);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht tool</title>
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

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <?php echo $tool["tool_id"] ?> </td>
                    <td> <?php echo $tool["tool_name"] ?> </td>
                    <td> <?php echo $tool["tool_category"] ?> </td>
                    <td> <?php echo $tool["tool_price"] ?> </td>
                    <td> <?php echo $tool["tool_brand"] ?> </td>
                    <td> Afbeelding: <img src="images/<?php echo $tool["tool_afbeelding"] ?>" alt="www/images">
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>