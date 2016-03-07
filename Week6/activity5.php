<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        $items = array("specs", "mugs", "sausage rolls");

        for($i = 1; $i<30; $i++){
            print "<p>On the $i";
            switch($i){
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
            print " of the month ";

            if($i%2==0){
                print "specs ";
                if($i%3==0){
                    print " and mugs ";
                }
                if($i%4==0){
                    print " and sausage rolls ";
                }
            }
            elseif($i%3==0){
                print "mugs ";
            }
            else{
                print "no products ";
            }

            print "are available.</p>";
        }


    ?>
</body>
</html>