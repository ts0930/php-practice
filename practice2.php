<?php
//課題１
$name="櫻井　翼";
if ($name="櫻井　翼"){
echo "私は櫻井　翼です。";
}

else {
echo "櫻井　翼ではありません";
}

//課題2

$answer=0;
echo $answer;

for ($i=0; $i<=10000; $i++){
    $answer += $i;
}
echo $answer;

//課題3
$fruits=array("apple","peach","strawberry","orange","mango");
foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

//課題4
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <=$end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}
