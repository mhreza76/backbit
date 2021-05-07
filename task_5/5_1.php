<?php
$a = 60;
$b = 1223341;
$c = -1321;
$max = max($a, $b, $c);
echo "Max: " . $max . "<br>";

echo "<br>";

print "Index Based Array <br>";
$names = array("reza", "hasib", "sajin", "ome", "daud");
for ($i = 0; $i < sizeof($names); $i++){
    print nl2br("$names[$i]\n");
}

echo "<br>";
print "Associative Array <br>";
$id = array("reza" => "60", "hasib" => "81", "sajin" => "76", "ome" => "73");
foreach ($id as $id_key => $id_value){
    echo "Key = " . "$id_key" . " Value = " . "$id_value <br>";
}


echo "<br>";
print "Multidimensional Array <br>";
$students = array(
    'cse' => array("reza", "hasib"),
    'eee' => array("tahmid", "ibad")
);
echo $students['cse'][0] . "<br>";
echo $students['cse'][1] . "<br>";
echo $students['eee'][0] . "<br>";