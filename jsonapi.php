<?php
$items = array();
for($i = 0; $i < 10; $i++){
$items[$i] = "This is message $i";
}
header('Content-Type: a[[lication/json');
$jsonOutput = json_encode($items);
echo $jsonOutput;
