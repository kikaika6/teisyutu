$c = double(5);
echo $c;                 

function double($x) {
    return $x * 2;
}

<?php
// Your code here!
$val = "grg0";
if (isNumber($val)) {
  echo "valは数字です";
} else {
  echo "valは数字ではありません";
}

function isNumber($x) {
    return is_numeric($x);
    // if (is_numeric($x)) {
    //     return true;
        
    // } else {
    //     return false;

    // }
}
?>
<?php
// Your code here!
$a = doubleArr(array(1,2,3));
foreach ($a as $b){
    echo $b;
    echo"\n";
}


<?php
// Your code here!
$a = doubleArr("人");
if (!$a) {
    echo "引数が不正です!";
    return;
}

foreach ($a as $num) {
    echo $num;
    echo "\n";
}

function doubleArr($x) {
    if (is_array($x) === true) {
    $array = array();
    foreach($x as $y){
        $array[] = $y*2; 
    }
    return $array;
	}else{
	return;
	}
    }
?>