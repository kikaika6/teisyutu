<?php
$foodsString = "肉,野菜,魚,ジュース,お酒";
$foods = strToArray($foodsString);
foreach ($foods as $food)
echo"●$food\n";
   
   function strToArray($foodsString){
   return $foods = preg_split("[,]",$foodsString);
        }
    function marksArray()
?>