<?php
$sum = 0;
    function sum(){  
        for($i=1;$i<=30;$i++){
                global $sum;
                $sum = $sum + $i;
                
            }
            return $sum;
    }

    $SUM = sum();
    echo "Sum is:- $SUM";
?>