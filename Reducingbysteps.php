<?php 


function gcdi($a, $b) {
    return (int) gmp_strval(gmp_gcd($a,$b));
}

function lcmu($a, $b) {
    return (int) gmp_strval(gmp_lcm($a,$b));
}

function som($a, $b) {
    return $a+$b;
}

function maxi($a, $b) {
    return max($a,$b);
}

function mini($a, $b) {
    return min($a,$b);
}

function oper_array($fct, $arr, $init) {
    $res = [];

    if($fct == 'som'){
        $res[$init] = $arr[$init];
        for($i = $init+1; $i< count($arr); $i++){
            $res[$i] = som($res[$i-1],$arr[$i]);
        }
    }
    else{
        $index = helper($arr,$init);
        $res [] = $init;
        for($i = $index+1; $i< count($arr); $i++){
            $rindex = count($res);

            $res[] = $fct($res[$rindex-1],$arr[$i]);
        }
    }

    return $res;
}

function helper($arr,$init)
{
    $index = -1;
        for($i = 0; $i < count($arr); $i++){
            if($arr[$i] == $init){
                $index = $i;
                break;
            }
        }
    return $index;
}

$a = [18, 69, -90, -78, 65, 40];
//var_export(oper_array('som',$a,0));
//var_export(oper_array('mini', $a, $a[0]));
//var_export(oper_array('maxi', $a, $a[0]));
//var_export(oper_array('lcmu', $a, $a[0]));
var_export(oper_array('gcdi', $a, $a[0]));


//gcdi
$r = [18, 3, 3, 3, 1, 1];
//lcmu
$r = [18, 414, 2070, 26910, 26910, 107640];
//maxi
$r = [18, 69, 69, 69, 69, 69];
//mini
$r = [18, 18, -90, -90, -90, -90];
//som
$r = [18, 87, -3, -81, -16, 24];





