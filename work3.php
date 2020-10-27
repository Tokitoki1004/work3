<?php

//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function sum($max) {
    $result = $max * 2;
    return $result;
 }   
 echo sum(200);
 echo "\n";

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function f($a, $b){
    $A = 0;
    $A = $a + $b;
    return $A;
}   
echo f(9, 3);
echo "\n";
echo f(3, 4);
echo "\n";

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。

function S($arr){
    $Q = 1;
    foreach($arr as $a){
    $Q = $Q*$a;
}   return $Q;
} 
echo S(array(1, 3, 5, 7, 9));
echo "\n";



//4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
function max_array($arr){
$max_number = $arr[0];
 foreach($arr as $a){
    if($max_number < $a){
    $max_number = $a;
 } 
 } return $max_number;
 }
 echo max_array(array(7, 11, 8));
 echo "\n";
 
 //5
//strip_tags
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";
echo strip_tags($text, '<p><a>');
echo "\n";

//array_push
$fruits = ['apple', 'orange', 'melon'];
array_push($fruits, 'banana', 'pineapple');
print_r($fruits);
echo "\n";

//array_merge
$items1 = ['dog', 'panda', 'cat'];
$items2 = ['horse', 'tigar'];
$items3 = ['dragon', 'rat'];
$item_merge = array_merge($items1, $items2, $items3);
print_r($item_merge);
echo "\n";

//time, mktime 
//time関数との違いとしては、time関数は現在時刻のUNIXタイムスタンプを取得することができるのに対し、mktime関数は指定した日時のUNIXタイムスタンプを取得することができる
$date = time();
echo $date;
echo "\n";

$timestamp = mktime(0, 0, 0, 8, 31, 2020);
echo $timestamp;
echo "\n";

echo date('Y/m/d', time());
echo "\n";

echo date("Y-m-d H:i:s");





 
 
 
 
 
 
 
 
 
 
 
 
 
 
