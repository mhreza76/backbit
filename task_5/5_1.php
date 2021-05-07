<?php
$a = 60;
$b = 12341;
$c = -1321;
$max = NULL;
if($a > $b AND $a > $c){
    $max = $a;
}
if($b > $a AND $b > $c){
    $max = $b;
}
else{
    $max = $c;
}
echo "Max: " . $max;


