<!DOCTYPE html>
<html>
    <body>
        <?php
        $month = array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        $len = count($month);
        foreach($month as $item) 
        //using for each
        {
           echo $item;
            echo "<br>";
        }
        
        ?>
        </body>
        </html>