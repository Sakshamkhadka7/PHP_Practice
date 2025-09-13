<?php
   
$multi =array(
  
array(2,3,4,5),
array(7,8,9,1),
array(1,4,7,8)

);
 for($i=0;$i<count($multi);$i++){
    echo var_dump($multi[$i]);
    echo "<br>";
 }

  for($i=0;$i<count($multi);$i++){
    for($j=0;$j<count($multi[$i]);$j++){

        echo $multi[$i][$j] . " ";
    }
    echo "<br>";
 }


?>