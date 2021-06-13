<?php

$n1 = 10;

$n2 = 20;

echo "the two number inputted are\n" . $n1 . $n2;

echo "\n1.Add\n2.sub\n3.mul\n4.div\n";

$c = readline("enter your choice:");

switch($c)
{
    case 1:
            $sum = $n1 + $n2;

            echo "the sum is $sum";

            break;

    case 2:

        $sub = $n1 - $n2;

        echo "the difference is $sub";

        break;

     case 3:
         
        $mul = $n1 * $n2;

        echo "the mul is $mul";

        break;  
        
      case 4:
         
        $div = (int)$n2/$n1;

        echo "the division is $div";

        break;
                     
}



?>