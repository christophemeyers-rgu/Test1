<?php


function displayAccessLevelInformation($accessLevel){
    if($accessLevel == "standarduser"){
        echo "<p>You are currently logged in as a standard user </p>";
    }
    elseif($accessLevel == "root"){
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You now have access to additional administrative features</p>";
    }
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
</head>
<body>

</body>
</html>