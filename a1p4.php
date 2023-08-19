<?php 
    
    $fact=1;
    function fact($num){
        global $fact;
        for($i=1;$i<=$num;$i++){
            $fact *= $i;
        }
        echo "Factorial of $num is:- $fact";
    }
    fact(5);
?>  