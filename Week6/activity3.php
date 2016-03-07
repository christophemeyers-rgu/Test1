<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <form action="activity3.html" method="post">

        <select name="wantedgood">
            <option value="specs">Specs</option>
            <option value="mugs">Mugs</option>
            <option value="sausagerolls">Sausage Rolls</option>
        </select>
        <input type="submit">
    </form>


    <?php

    $wantedgood = "specs";

    switch($wantedgood){
        case "specs":
            echo "You have to be 16 to buy specs.";
            break;
        case "mugs":
            echo "You have to be 18 to buy mugs.";
            break;
        case "sausagerolls":
            echo "You have to be 21 to buy sausage rolls.";
            break;
        default:
            echo "You do what you want.";
    }

    ?>
</body>
</html>