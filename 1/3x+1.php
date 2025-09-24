<?php
    $a = 15;
    $b = 1;
    print ("num: " . $a ."<br>");
    while ($a != 1) {
        if ($a % 2 == 0) {
            $a = $a / 2;
        }
        elseif ($a % 2 != 0) {
            $a = 3 * $a + 1;
        }
        print ("num: " . $a ."<br>");
        $b++;
    }
    print ("Žink.: " . $b ."<br>");
?>