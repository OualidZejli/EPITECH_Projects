<?php

    function get_shortest($array){
        $length = array_map('strlen', $array);
        asort($length);
        $min = $array[key($length)];
        return $min;
    }

?>