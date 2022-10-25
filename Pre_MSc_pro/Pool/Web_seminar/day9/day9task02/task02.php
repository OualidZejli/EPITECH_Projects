<?php

function render_body($str){
    if ($str == 'home'){
        readfile('home.html');
    }

    elseif ($str == 'php'){
        readfile('php.html');
    }

    elseif ($str == 'sql'){
        readfile('sql.html');
    }

    else {
        return "Unknown page";
    }
}

?>