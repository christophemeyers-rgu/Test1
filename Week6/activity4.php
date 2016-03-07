<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <?php

    $provisionedActivities = array("Specs", "Mugs", "Sausage Rolls");

    foreach($provisionedActivities as $x){
        print "<p>$x</p>";
    }

    $provisionedActivities[1] = "Hugs";
    unset($provisionedActivities[2]);

    foreach($provisionedActivities as $x){
        print "<p>$x</p>";
    }
    ?>

</body>
</html>