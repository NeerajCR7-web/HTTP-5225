<?php
            
            $number = ceil(rand(1,100));// https://www.w3schools.com/PHP/func_math_rand.asp

            echo "The number you have entered is: " .$number. '<br>';

            if($number%3==0 && $number%5==0){ 
                echo 'FizzBuzz';
            }
            elseif($number%5==0){ 
                echo 'Buzz';
            }
            elseif($number%3==0){ 
                echo 'Fizz';
            }
            else{
                echo'This is not a Magic Number' . $number;
            }
        ?>
                                                                