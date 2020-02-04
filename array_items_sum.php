<?php
/*
 * 计算多维整数数组之和
 * 按顺序逻辑计算
 */

function sum_arr1($arr){
    static $sum_value = 0;
    foreach ($arr as $v){
        if(is_array($v)) {
            sum_arr1($v);
        }else{
            $sum_value += $v;
        }
    }
    return $sum_value;
}

/*
 * 如果不是数组就用array_sum()计算总和；
 * 如果是数组就递归到下一步运算获取返回的数组总和赋值给变量sum
 * 返回sum的值永远是下一维数组之和
 */
function sum_arr2($arr){
    $sum = 0;
    foreach ($arr as $v){
        if(is_array($v)){
            $sum += sum_arr2($v);
        }
    }
    return $sum + array_sum($arr);
}

//function1计算结果
$t1 = microtime(true);
$result = sum_arr1([1,2,[3,4],[5,6],[7,8,9]]);
$t2 = microtime(true);
echo $result."<br/>";
echo $t2-$t1;
echo "<hr/>";

//function2计算结果
$t3 = microtime(true);
$r2 = sum_arr2([1,2,[3,4],[5,6],[7,8,9]]);
$t4 = microtime(true);
echo $r2."<br/>";
echo $t4-$t3;
echo "<hr/>";