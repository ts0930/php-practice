<?php
//課題1
function sum($max){
$answer=$max*2;
return $answer;
}
echo sum(50);

//課題2
function mix($a,$b){
    $plus=$a+$b;
    return $plus;
}
echo mix(2,4) ;

//課題3
$arr=array(1, 3, 5 ,7, 9);
function multiplication($arr){
    $number=1;
    foreach($arr as $numbers){
    $number*=$numbers;}
    return $number;
}
echo multiplication($arr);
echo "\n";
//課題4
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
$arr=array(1,44,2,85,9);
 $max_number = $arr[0];
 foreach($arr as $a){
 if($max_number<$a){
 $max_number=$a;}
 }

 return $max_number;
 }
 echo max_array($arr);
 //課題5
 //strip_tags
 $word="<html><body><title>エンジニア勉強</title><p>目指せ転職</p></body></html>";
 $words=strip_tags($word);
 echo $words;
 //array_push
 $sports=array("baseball","soccer","tennis","tabletennis");
 $push_sports=array_push($sports,"basketball","swimmming");
 echo $push_sports;
 print_r($sports);
 //array_merge
 $colors1=array("red","blue");
 $colors2=array("yellow","pink");
 $colors3=array("purple","black");
 
$all_colors=array_merge($colors1,$colors2,$colors3);
print_r ($all_colors);
//time, mktime
$today = time();
echo $today;

$next_year=date("Y-m-d H:i:s",mktime(12,59,0,1,0,2021));
echo $next_year;

//date
$today = date('Y-m-d');
echo $today;