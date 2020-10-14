<?php
    $n = 4;
    for($r = 1; $r <= (2*$n - 1); $r++)
    {
        for($d = 1; $d <= (2*$n - 1); $d++)
        {
            if ($d == $n - 1 + $r || $d == $n + 1 - $r|| $d == $r - $n + 1 || $d == 3*$n - 1 - $r)
            {
                echo "*";
            }
            else
            {
                echo "&ensp;";
            }
        }
        echo "<br>";
    }
?>