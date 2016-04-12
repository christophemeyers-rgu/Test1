<?php
/**
 * Created by PhpStorm.
 * User: Christophe
 * Date: 12/04/2016
 * Time: 09:35
 */


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <ul>
        <li>
            <?php
            print $_GET["query"];
            ?>
        </li>
        <li>
            <?php
            print $_GET["type"];
            ?>
        </li>
    </ul>
</body>
</html>