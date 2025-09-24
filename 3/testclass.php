<?php
    class Testclass {

        private $a;
        private const B = 5;
        private $zinksniai;

        function __construct($a) {
            $this->a = $a;
            $this-> zinksniai = 1;
        }

        function calculate(){
            $tempNum = $this->a;

            print ("num: " . $tempNum ."<br>");
            while ($tempNum != 1) {
                if ($tempNum % 2 == 0) {
                    $tempNum = $tempNum / 2;
                }
                elseif ($tempNum % 2 != 0) {
                    $tempNum = 3 * $tempNum + 1;
                }
                $this->a = $tempNum;
                print ("num: " . $tempNum ."<br>");
                $this->zinksniai++;
            }
            print ("Žink.: " . $this->zinksniai ."<br>");
        }

            function getConstB(){
                return self::B;
            }

        function calculateFactorial(){
            $factorialNum = $this->getConstB();
            $result = 1;
            for ($x = 1; $x <= $factorialNum; $x++) {
                $result *= $x;
            }   
            print ("Žink.: " . $factorialNum . "<br>");
            print ("Žink.: " . $result . "<br>");
        }
    }
    $test = new Testclass(26);
    $test->calculate();
    $test->calculateFactorial();
?>


