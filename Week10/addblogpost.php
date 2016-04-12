<?php
/**
 * Created by PhpStorm.
 * User: Christophe
 * Date: 12/04/2016
 * Time: 10:11
 */







?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD']==='GET'){
?>
    <form action="addblogpost.php" method="post">
        <h2>This is a form, Mister!</h2><br>
        <input type="text" name="title" placeholder="Give your title."><br>
        <input type="text" name="text" placeholder="Please put some words here."><br>
        <p>Choose one of the following:</p><br>
        <input type="radio" name="combo" value="cat"> Cat<br>
        <input type="radio" name="combo" value="dog"> Dog<br>
        <input type="radio" name="combo" value="misc"> Misc<br>
        <input type="submit" value="Submit">
    </form>
<?php
}
elseif ($_SERVER['REQUEST_METHOD']==='POST'){
?>

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
<?php
}
?>


</body>
</html>