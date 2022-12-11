<?php

function outputTable() {
    echo "<table>\n";

    for ($i = 0; $i < 10; $i++) { 
        echo "<tr>\n";
        for ($x = 1; $x <= 10 ; $x++) { 
            if ($i > 0) {
                $num = ($i*10) + $x;
            }
            else {
                $num = $x;
            }
            echo "<td>$num</td>\n";
        }
        echo "</tr>\n";
    }

    echo "</table>\n";
}

?>
