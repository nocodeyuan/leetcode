<?php
/*
 * 传入数组元素之和等于给定数，输出元素下标
 */

function sum_items($target=1,$nums=[]){
    foreach ($nums as $k1 => $v1){
        foreach ($nums as $k2 => $v2){
            if($k2 == $k1){
                continue;
            }elseif($target == $v1 + $v2){
                echo $k1."<br/>";
                echo $k2;
                unset($nums[$k1]);
                unset($nums[$k2]);
            }
        }
        echo "<hr/>";
    }
}
$time1 = microtime(true);
sum_items(9,[2,7,11,15]);
$time2 = microtime(true);
echo $time2-$time1;