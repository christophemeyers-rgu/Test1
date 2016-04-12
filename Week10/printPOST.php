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
            echo $_POST["title"];
            ?>
        </h1>
        <p>
            <?php
            echo $_POST["text"];
            ?>
        </p>
        <strong>
            <?php
            echo $_POST["combo"];
            ?>
        </strong>
    </article>


</body>
</html>