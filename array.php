<?php
$arr= [1,2,3,2];
$length=sizeof($arr);
for ($i=0;$i<$length;$i++){
    for($j=$i+1;$j<$length;$j++){
        if($arr[$i]==$arr[$j]){
            echo("$arr[$j]");
        }
}
    
}

