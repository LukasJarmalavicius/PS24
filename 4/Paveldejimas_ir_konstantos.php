<?php
    include('Factorial.php');

    class constantas{
        const B = 10;
    }
    $test = new Collatz(constantas::B);
    $test2 = new Factorial(constantas::B);

    $test->calculate();
    $test2->calculate();
?>


