<?php
$arr = ["ejjjjmmtthh", "zxxuueeg", "aanlljrrrxx", "dqqqaaabbb", "oocccffuucccjjjkkkjyyyeehh"];
// t =  0 ,1 , 2, 3,  4,5 

function slidingwidow($arr, $k)
{
    $p1 = 0;
    $p2 = 0;
    $longest = 0;
    $total = 0;
    $i = 0;

    for($i =0; $i < $k; $i++){
        $total += strlen($arr[$i]);
    }

    $p2 = $i-1;
    $startindex = 0;

    for($i=$p2+1; $i < count($arr); $i++){
        $total += strlen($arr[$i]);
        $total -= strlen($arr[$p1]);
        
        $p1++; 
        if($total > $longest){
            $startindex = $p1;
            $longest = $total;
        }      
    }

    $res = '';
    $end = $startindex +$k;
    for($i =$startindex; $i < $end; $i++){
        $res .=$arr[$i];
    }
    return $res;
}

echo slidingwidow($arr, 1);

// slidingwidow($arr);

// function longestConsec($strarr, $k){
    
//     // $strlen = [];

//     // for($i=0; $i < count($stararr); $i++){
//     //     $strlen[] = strlen($stararr[$i]);
//     // }

//     $longest = 0;
//     $start = -1;
//     $end = -1;
//     // ["zone", "abigail", "theta", "form", "libe", "zas"]
//     // [4, 7 , 5, 4 , 4,3]
//     for($i=0; $i < count($strarr); $i++){

//         $n =0;
//         $j=$i;
//         $total =0;
//         while($n < $k){
//             $total += strlen($strarr[$j]); 
//             $j++;
//             $n++;
//         }

//         if($total > $longest){
//             $start = $i;
//             $end = $i+$k-1;
//             $longest = $total;
//         }
//     }

//     if($end == $start){
//         return $strarr[$end];
//     }

//     $res = '';
//     for($i = $start; $i <=$end; $i++){
//         $res .=$strarr[$i];
//     }

//     return $res;

// }

// // ["zone", "abigail", "theta", "form", "libe", "zas"]
// // [4, 7 , 5, 4 , 4,3]

// echo longestConsec(["zone", "abigail", "theta", "form", "libe", "zas"], 2);
// //"abigailtheta"
// echo longestConsec(["ejjjjmmtthh", "zxxuueeg", "aanlljrrrxx", "dqqqaaabbb", "oocccffuucccjjjkkkjyyyeehh"], 1);
// //, "oocccffuucccjjjkkkjyyyeehh");