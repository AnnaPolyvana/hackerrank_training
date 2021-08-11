<?php

/*
 * Complete the 'hourglassSum' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function hourglassSum($arr) {
         $summa=[];
     for ($i =0;$i<count($arr)-2; $i++)
        {
           for ($j =0;$j<count($arr)-2; $j++)
           { 
    array_push($summa, $arr[$i][$j]+$arr[$i][$j+1]+$arr[$i][$j+2]+$arr[$i+1][$j+1]+$arr[$i+2][$j]+$arr[$i+2][$j+1]+$arr[$i+2][$j+2]);
           }
        }
         return  max($summa); 
?>