<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<h1>Hello</h1>

    <p>
        Welcome
        <?php
            echo $_POST["username"];
        ?>
        !
    </p>
</body>
</html>