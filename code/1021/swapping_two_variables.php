<?php
//交换两个变量的值(不用临时变量)


//方法一：
$a = $a+$b;
$b = $a-$b;
$a= $a-$b;


//方法二：
list($a, $b) = array($b, $a);


//方法三：
$a = $a ^ $b;
$b = $a ^ $b;
$a = $a ^ $b;