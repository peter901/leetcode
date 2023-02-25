<?php

function backspace($str){
    $stack=[];

    for($i=0; $i< strlen($str); $i++){
        if($str[$i] == '#' && !empty($stack)){
            array_pop($stack);
        }else{
            array_push($stack,$str[$i]);
        }
    }
    
    var_export(implode("",$stack));
}


backspace("abc#dg###"); 