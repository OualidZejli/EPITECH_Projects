<?php

function dynamic_body(){
    $content = htmlspecialchars($_GET["page"]);

    if ($content == 'home'){
        readfile('home.html');
    }

    elseif ($content == 'php'){
        readfile('php.html');
    }

    elseif ($content == 'sql'){
        readfile('sql.html');
    }

    else {
        return "Unknown page";
    }
}

?>