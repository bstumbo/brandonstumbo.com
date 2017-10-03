<?php

function giga($start) {
    $unix = $start->getTimestamp();
    $newtime = $unix + pow(10, 9);
    
    $date = new DateTime();
    $date->setTimestamp($newtime);
    $date->format("Y-m-d H:i:s");
    
    return $date;
}