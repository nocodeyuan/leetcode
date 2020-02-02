<?php
/*
 * 公鸡5元一只，母鸡3元一只，小鸡1元三只，100元买了100只，请问各买了几只？
 */
//暴力解法
$time1 = microtime(true);

for($x = 1;$x <= 100/5;$x++){               //公鸡
    for($y = 1;$y <= (100-5*$x)/3;$y++){      //母鸡
        $z = 100 - $x -$y;                      //小鸡
        if($z % 3 != 0){
            continue;
        }
        if(5*$x+3*$y+$z/3 == 100){
            echo $x."<br/>",$y."<br/>",$z;
            echo "<hr/>";
        }
    }
}

$time2 = microtime(true);

echo $time2-$time1;
