<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>

    <form action="activity2.php" method="post">
        <input type="text" placeholder="Name" name="name"> <br>
        <input type="number" placeholder="Age" name="age"> <br>
        <input type="submit">

    </form>

        <?php
        /**
         * Created by PhpStorm.
         * User: Christophe
         * Date: 07/03/2016
         * Time: 09:45
         */

        $name = $_POST["name"];
        $myage = $_POST["age"];

        print "Dear $name, in Aberdeen, at your age of $myage, you can buy ";

        if($myage<16){
            print "nothing.";
        }
        elseif($myage<18){
            print "specs.";
        }
        elseif($myage<21){
            print "specs and mugs.";
        }
        else{
            print "specs, mugs and sausage rolls.";
        }
        ?>
    </body>
</html>


