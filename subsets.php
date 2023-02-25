<?php

function est_subsets($arr)
{
    $arr = array_unique($arr);
    $res = [];

    dfs(0,[],$arr,$res);

    return count($res);
}

function dfs($i, $cur, $arr,&$res){
    
    if(!empty($cur)){
        $res[] = $cur;
    }

    for($j=$i; $j<count($arr); $j++){

        if($i != $j && $arr[$j] == $arr[$j-1]) continue;
        array_push($cur,$arr[$j]);
        dfs($j+1,$cur,$arr,$res);
        array_pop($cur);
    }
    
}

var_export(est_subsets(['a','b','c','d','d']));