<?php
    class Collatz {

        private $a;
        private $zinksniai;

        function __construct($a) {
            $this->a = $a;
            $this-> zinksniai = 1;
        }

        function getA(){
            return $this->a;
        }

        function calculate(){
            $tempNum = $this->getA();

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
           print("Žink.: " . $this->zinksniai ."<br>");
        }

    }

?>


