<?php

function puissance($nb1, $nb2) : int {
    $result = 1;
    for ($i = 0; $i < $nb2; $i++) {
        $result = $result * $nb1;
    }
    return $result;
}

var_dump(puissance(8888,0));
?>