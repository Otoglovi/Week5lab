<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <p>
            <?php
            echo "Hello World. This is my Time!!!";
            echo "<br/>Hello," . "" . "worldz" . "!<br/>";
            echo 5*7;

            $myname = "Frodo Baggins";
            $myage = 111;

            echo "<br/> My name is " .$myname." and I am ".$myage;

            echo "I get printed";
            // I don't! I'm a comment.

            /* I don't get printed either
            and neither do I*/

            $name = "Edgar";

            if ($name == "Simon"){
                print "I know you!";
            }
            else {
                print "Who are you?";
            }
            ?>
        </p>
    </body>
</html>
