<?php

function divisionEuclidienne($nb1, $nb2) : ? int {
    if($nb2 === 0) {
        return null;
    }
    else {
        $quotient = 0;
        $temp = $nb1;
        while($nb2 <= $temp) {
            $temp = $temp - $nb2;
            $quotient++;
        }
        return $quotient;
    }
    
}

var_dump(divisionEuclidienne(9456, 0));

?>