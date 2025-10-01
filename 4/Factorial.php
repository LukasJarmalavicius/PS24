<?php
    include('Collatz.php');
    class Factorial extends Collatz {

        function calculate(){
            $factorialNum = $this->getA();
            $result = 1;
            for ($x = 1; $x <= $factorialNum; $x++) {
                $result *= $x;
            }   
            print ("num.: " . $factorialNum . "<br>");
            print ("Factorialas.: " . $result . "<br>");
        }
    }
?>


