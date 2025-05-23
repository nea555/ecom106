<?php
$fruits=['apple','orange','banana'];
//get length
echo count($fruits);
//serach
var_dump(in_array('apple',$fruits));

//add to array
$fruits[]='grape';
array_push($fruits,'blueberry','strawberry');
array_unshift($fruits,'mango');//add at the start

//remove from array
array_pop($fruits);
array_shift($fruits);
unset($fruits[2]);//remove specific element

//split into 2 chunks
$chucked_array=array_chunk($fruits,2);

$ary1=[1,2,3];
$ary2=[4,5,6];
$ary3=array_merge($ary1,$ary2);
$ary4=[...$ary1,...$ary2];

$a=['red','blue','black'];
$b=['apple','blueberry','coconut'];
$c=array_combine($a,$b);

print_r($fruits);
print_r($c);

$keys=array_keys($c);
$flipped=array_flip($c);
print_r($flipped);
?>
