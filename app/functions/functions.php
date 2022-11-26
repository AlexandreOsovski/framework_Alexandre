<?php

function pre($paramns = [] , $die = true){
    echo '<pre>';
    print_r($paramns);
    echo '</pre>';

    if($die) die();
}