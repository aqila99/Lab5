<html>
    <body>
        <?php
       //array declaration
       $monthDays = array('Splorch' => 23, 'Sploo' => 28, 'Splat' => 2, 'Splatt' => 3, 'Spleen' => 44,
        'Splune' => 30, 'Spling' => 61, 'Slendo' => 61, 'Sploctember' => 31, 'Splictember' => 31, 'Splanet' => 30, 'TheRest' => 22);
        print_r("Number of Days:".min($monthDays));
        echo '</br>';
        print_r("Name of Shortest Month:".array_search(min($monthDays),$monthDays));
        echo '</br>';
        print_r("Number of Days in Year:".array_sum($monthDays));
        echo '</br>';
        ?>
        </body>
        </html>
