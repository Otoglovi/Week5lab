<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <p>
            <?php
            echo "Hello World. This is my Time!!!";
            echo "<br/>Hello," . " " . "worldz" . "!<br/>";
            echo 5*7;

            $myname = "Frodo Baggins";
            $myage = 111;

            echo "<br/> My name is " .$myname." and I am ".$myage. " years old";
            ?>
        </p>
        <p>
            <?php
            echo "I get printed";
            // I don't! I'm a comment.

            /* I don't get printed either
            and neither do I*/
            ?>
        </p>
        <p>
            <?php
            $name = "Edgar";

            if ($name == "Simon"){
                print "I know you!";
            }
            else {
                print "Who are you?";
            }
            ?>
        </p>
        <p>
            <?php
            $numberOfHobbits = 1;

            switch ($numberOfHobbits){
                case 1:
                    echo "1 sad hobbit";
                    break;
                case 2:
                    echo "2 happy hobbits";
                    break;
                case 3:
                    echo "3 hobbits are a crowd";
                    break;
                default:
                    echo "All the hobbits have gone home";
            }
            ?>
        </p>
        <p>
            <?php
            $wantedgood = 'sausage rolls';

            switch ($wantedgood){
                case 'specs':
                    echo "You have to be 16 to buy specs";
                    break;
                case 'mugs':
                    echo "You have to be over 18 to buy mugs";
                    break;
                case 'sausage rolls':
                    echo "You have to be over 21 to buy sausage rolls";
                    break;
                default:
                    echo "Nothing available";
            }
            ?>
        </p>
        <p>
            <?php
            $myArray = array("do ","re "," mi"); //declares the array

            echo $myArray[0]; //outputs "do"

            $myArray[1] = " la"; //modifies position 1 (re)

            echo "<br /> $myArray[1]"; //outputs "la"

            unset($myArray[2]); //removes the array in position 2
            ?>
        </p>
        <p>
            <?php
            for ($x = 1; $x < 10; $x++){
                echo "<p>Hello!</p>";
            }
            ?>
        </p>
    </body>
</html>
