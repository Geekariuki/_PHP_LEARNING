<?php

function dd($data){
    echo '<pre>';
    die(var_dump($data));
    echo '<prev>';
}

function ageLimit($age){
    if ($age >= 21) {
        return true;
    } else {
        return false;
    }
}


