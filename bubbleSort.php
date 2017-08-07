<?php
/**
 * Created by PhpStorm.
 * User: zimo
 * Date: 2017/8/5
 * Time: 11:25
 */

function bubbleSort(&$array){

    for ($i = 0;$i<count($array);$i++){
        for ($j = $i+1;$j<count($array);$j++) {
            if ($array[$j] < $array[$i]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }

    return $array;
}

$array = [6,9,8,5,3,2,4];
print_r(bubbleSort($array));