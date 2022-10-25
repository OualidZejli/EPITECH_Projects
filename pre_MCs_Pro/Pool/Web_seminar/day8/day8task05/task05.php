<?php

function calc_average($arraynum){

    $average = array_sum($arraynum) / count($arraynum);
    $averound = round($average, 1);
    
    return $averound;
}

?>