<table>
<?php
    for($r = 1; $r <= 7; $r++)
    {
        echo "<tr>";
        for($d = 1; $d <= 7; $d++)
        {
            if ($d == 3 + $r || $d == 5 - $r)
            {
                echo "<td>*</td>";
            }
            elseif ($d == $r -3 || $d == 11 - $r)
            {
                echo "<td>*</td>";
            }
            else
            {
                echo "<td></td>";
            }
        }
        echo "</tr>";
    }
?>
</table>