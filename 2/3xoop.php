<?php
    class Testclass {

        private $num;
        private $zinksniai;
        private $zinks_num = [];

        function __construct($num) {
            if($num <= 0){
                die("Pradinis skaičius turi būti didesnis už 0");
            } else {
                $this->num = $num;
            }
 
        }

        function set_num($num){
            $this->num = $num;

        }

        function calculate(){
            if(empty($this->num)){
                return;
            }
            else{
                $this->zinks_num = array();
                $this->zinksniai = 1;

                $temp_num = $this->num;
                $this->zinks_num[] = $temp_num;

                while ($temp_num != 1) {
                    if ($temp_num % 2 == 0) {
                        $temp_num = $temp_num / 2;
                    }
                    elseif ($temp_num % 2 != 0) {
                        $temp_num = 3 * $temp_num + 1;
                    }
                    $this->zinks_num[] = $temp_num;
                    $this->zinksniai++;
                }
            }
        }

        function get_zinks(){
            return $this->zinksniai;
        }

        function get_zinks_num(){
            return $this->zinks_num;
        }

        function printer(){
            print("Pradinis skaičius: " . $this->num . "<br>");
            print("Žinksniai: <br> Num: " . implode("<br> Num: ", $this->get_zinks_num()) . "<br>");
            print("Žinksniu Num: " . $this->get_zinks() . "<br>");
        }
    }

    $test = new Testclass($_GET["num"]);
    $test->calculate();
    $test->printer();
?>


