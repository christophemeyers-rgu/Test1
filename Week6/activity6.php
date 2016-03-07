<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <?php
        $items = array("specs", "mugs", "sausage rolls");

        $supply = array(7, 7, 7);

        $day = 1;

        while($supply[0]!=0 && $supply[1]!=0 && $supply[2]!=0 && $day<31){

            $todaysGood = rand(0,2);
            $supply[$todaysGood] -= 1;

            print "<p>On the $day";
            switch($day){
                case 1:
                    print "st";
                    break;
                case 2:
                    print "nd";
                    break;
                case 3:
                    print "rd";
                    break;
                case 21:
                    print "st";
                    break;
                case 22:
                    print "nd";
                    break;
                case 23:
                    print "rd";
                    break;
                default:
                    print "th";
            }
            print " of the month $items[$todaysGood] are available.</p>";

            $day += 1;
        }
        print "<p> No more goods are available this month.</p>";



    ?>


</body>
</html>