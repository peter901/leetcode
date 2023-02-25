<?php


function race($v1, $v2, $g){
    if($v1 >= $v2){
        return null;
    }

    $time = $g/($v2-$v1);

    $seconds = $time*3600;

    $hours = (int) floor($time);
    $seconds -=$hours*3600;

    $minutes= floor($seconds/60);

    $seconds-= $minutes*60;
    return [(int) $hours,intval($minutes), intval($seconds)];

}

var_export(race(80,91,37));