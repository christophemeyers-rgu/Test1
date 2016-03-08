<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <?php

    $people = array();
    array_push($people, "Chris");
    array_push($people, "Pedro");
    array_push($people, "Iain");
    array_push($people, "Kyle");
    array_push($people, "Marc");
    array_push($people, "Patrick");
    array_push($people, "Somto");
    array_push($people, "Josh");
    array_push($people, "Dinesh");
    array_push($people, "Chudi");
    array_push($people, "Shahid");
    array_push($people, "David");
    array_push($people, "Mike");

    sort($people);

    $draw = rand(0,count($people));

    $winner = strtoupper($people[$draw]);
    unset($people[$draw]);

    print "<p>" . strtoupper($winner);

    print " number $draw has won all the specs.";


    $draw = rand(0,count($people));

    $winner = strtoupper($people[$draw]);
    unset($people[$draw]);

    print "<p>" . strtoupper($winner);

    print " number $draw has won all the mugs.";


    $draw = rand(0,count($people));

    $winner = strtoupper($people[$draw]);
    unset($people[$draw]);

    print "<p>" . strtoupper($winner);

    print " number $draw has won all the sausage rolls.";






    ?>


</body>
</html>