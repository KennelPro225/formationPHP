<?php
$list = ['KenneL', 'KASSI', 'Georges', 'Emmanuel', 'Kouame'];
var_dump(in_array("KenneL", $list));

echo "<br>";
array_push($list, 'Kennel');
array_unshift($list, 'KOFFI');
array_pop($list);
array_shift($list);
$lis = array_chunk($list, 2);
print_r($lis);

echo "<br>";
echo "<br>";

print_r($list);
