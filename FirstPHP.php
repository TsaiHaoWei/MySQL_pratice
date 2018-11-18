<?php
header('content_type:text/html;charset=utf-8');
$str = '在<b>PHP</b>顯示<br>各種符號';
//echo $str;
/*  \\,\  \","  \{},{} \t,tab \xnn,ASCII十六位元對應字元
\$,$  \[],[]  \r, 歸位字元  \nn,ASCII八位元對應
*/
              //Array Application
$seasons_EN=array("spring","summer","autumn",4=>"winter");
$seasons_TW=[1=>"春天","夏天","秋天","冬天"];
//echo "$seasons_EN[0]=$seasons_TW[1]";
$class1=[80,90,100];
$class2=[8,90,100];
$score[0]=$class1;
$score[1]=$class2;
//echo $score[0][0];
            //constant定義
define('PI',3.1415926) ;
//echo M_PI * 4 * 4;//Predefined Constants內建常數
            //Operator Oper-and Expression
$x=2;$y=++$x * 2; //x=3 y=6
$x=2;$y=$x++ * 2; //x=3 y=4
$x=2;$y=--$x * 2;//x=1 y=2
$x=2;$y=$x-- * 2;//x=1 y=4
            //串聯運算子
$str = '程式';
//echo 'PHP' . $str . '設計';
            //比較 邏輯運算式
$sum = 100;
$str = '100';
$str == $sum ;//True String => Int
$str === $sum ;//False
echo $str === $sum ;//True 輸出 = 1 False 輸出 =    ;
echo $str == $sum;
echo "<br>";
$arr=['0',1];
echo $arr && true;//True
echo $arr[0] && true;//False
echo $arr[1] && true;//True
              //IF ,迴圈
$number = 42;
$number += $number ;
$number /= 10 ;//PHP沒有整數除法 他可以直接變小數
switch ($number) {
   case 8:
     // code...
     echo "計算後=8";
     break;
   case 9:
       // code...
       echo "計算後=9";
       break;
   default:
     // code...
     echo "我算錯了 答案是$number<br>";
     break;
 }
$sum = 0;
  $i = 1;
  while ($i <= 10) {
    $sum += $i++;
  } echo $sum;
$sum = 0;
   $i = 1;
   for ($i=0; $i <11 ; $i++) {
     // code...
     if($i==5)continue;//跳到迴圈並執行下一個
     $sum += $i;
   }echo "$sum<br>";
$seasons=["spring","summer","autumn","winter"];
  foreach ($seasons as $key => $value) {//key索引值 value 元素值
  // code...
  echo "$value<br>";
}
$length = count($seasons);
  for ($i=0; $i < $length ; $i++) {
    // code...
    echo "$seasons[$i]<br>";
  }

?>
