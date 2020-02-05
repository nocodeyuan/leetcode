<?php
/*
 * 二分查找
 * 如：$array = [1,2,3,4,5,6,7,8,9,10];
 * 假如查找元素為$search = 7;
 * 1.查找數組中間值，如果中間值大於查找元素則查找中間值左側數組元素
 * 2.再次獲取左側數組元素的中間值進行對比
 */
function binary_search($array,$search,$start,$end){
    //先判斷起點下標是否大於終止下標,查找错误
    if($start > $end){
        return false;
    }
    //获取数组二分元素下标
    $mid  = floor(($start+$end)/2);
    //var_dump($mid);

        //如果二分元素小于需查找元素则从该二分元素后一位元素到输入的终止下标递归
    if($array[$mid] < $search){
        return binary_search($array,$search,$mid+1,$end);
        //如果二分元素大于需查找元素则从输入的起点元素到二分元素前一位元素下标递归
    }elseif ($array[$mid] > $search){
        return binary_search($array,$search,$start,$mid-1);
    }
    return $mid;
}

//测试
$arr = [1,2,3,4,5,6,7,8,9,10,11];
$len = count($arr);
var_dump(binary_search($arr,6,0,$len));