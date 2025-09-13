<?php

$arr=array(5,3,8,2,1);


$i;
$temp;
for($i=0;$i<5;$i++){

for($j=0;$j<5;$j++){
 
    if($arr[$i]<$arr[$j]){
 
        $temp=$arr[$i];
        $arr[$i]=$arr[$j];
        $arr[$j]=$temp;
    }

}
}

for($i=0;$i<5;$i++){
        echo $arr[$i] ."<br>";
    }

?>