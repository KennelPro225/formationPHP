<?php
$array = [12,"Kennel",1.2,['age'=>12],[21,34]];
for($i=0; $i<count($array);$i+=1){
    echo var_dump($array[$i])."<br>";
}
$i = 0;
while ($i < count($array)) {
    # code...
    echo var_dump($array[$i])."<br>";
    $i++;
}
$i=0;
do {
    echo var_dump($array[$i]) . "<br>";
$i++;

} while ($i < count($array));
?>