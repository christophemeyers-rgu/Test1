<?php



session_start();
$access_level = $_COOKIE['access_level_cookie'];

displayAccessLevelInformation($access_level);

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




