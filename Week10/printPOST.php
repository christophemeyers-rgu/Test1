<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <article>
        <h1>
            <?php
            echo $_GET["title"];
            ?>
        </h1>
        <p>
            <?php
            echo $_GET["text"];
            ?>
        </p>
        <strong>
            <?php
            echo $_GET["combo"];
            ?>
        </strong>
    </article>


</body>
</html>