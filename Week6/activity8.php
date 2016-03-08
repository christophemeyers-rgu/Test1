<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <?php

    function wanted($name, $specsno, $mugsno, $rollsno){

        $bounty = 5 * ($specsno * $mugsno * $rollsno)*($specsno * $mugsno * $rollsno);

        print "<p>Wanted: $name<br>
                Known to be in possession of the following items:<br>
                Specs ($specsno)<br>
                Mugs ($mugsno)<br>
                Sausage Rolls ($rollsno)<br>
                Award for capture: £$bounty
                </p>";
    }

    wanted("Joe Bloggs", 2, 4, 1);
    ?>

</body>
</html>