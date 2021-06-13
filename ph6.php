<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime numbers and Fibonacci</title>
</head>
<body>

        <?php

          $num = 0;  
          $n1 = 0;  
          $n2 = 1;  
       echo "<h3>Fibonacci series for first 10 numbers: </h3>";  
       echo "\n";  
         echo $n1.' '.$n2.' ';  
       while ($num < 10 )  
   {  
       
    $n3 = $n2 + $n1;  
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num + 1;  

    }   


?>

    <?php
   
   $count = 0 ;
   $number = 2 ;

   echo "the prime numbers are:\n";

   while ($count < 5)
   {
   $div_count=0;

   for ( $i=1;$i<=$number;$i++)

   {

   if (($number%$i)==0)

   {
   $div_count++;

   }

   }
   
   

   if ($div_count<3)
   {

    echo $number . "  ,";

   
   $count=$count+1;
   }
   $number=$number+1;
   }
      

    
   
     ?>
    
</body>
</html>