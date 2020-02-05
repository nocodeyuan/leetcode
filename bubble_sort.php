<?php
/*
 * 冒泡排序
 * 如：$arr = [9,3,5,4,2];
 * 第一回排序结果：[3,5,4,2,9]，排序次数；4
 * 第二回排序结果：[3,4,2,5,9]，排序次数：3
 * 第三回排序结果：[3,2,4,5,9]，排序次数：2
 * 第四回排序结果：[2,3,4,5,9]，排序次数：1
 * 1.冒泡排序，两两比较，如果前一个元素比后一个大就交换位置
 * 2.假定n个元素，最多需要进行n-1回排序
 * 3.第一回两两比较次数为n-1次，下一回比较次数比上一回少一次
 */
function sort_array_values($array){
    //先获取数组长度
    $len = count($array);

    //控制排序回合数
    for($i = 0;$i < $len-1;$i++)
    {
        //控制每回合排序次数
        for($k = 0;$k < $len-1-$i;$k++)
        {
            if($array[$k] > $array[$k + 1])
            {
                $temp = $array[$k];
                $array[$k] = $array[$k +1];
                $array[$k + 1] = $temp;
            }
        }
    }
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    return $array;
}

//测试
$arr = [5, 10, 8, 7, 6, 2, 9, 1, 3, 4];
sort_array_values($arr);