<?php

//for loop
for($x=0;$x<=10;$x++){
    echo $x."<br>";
}

echo "<br>";

//while loop
$y=1;
while($y<=15){
    echo $y."<br>";
    $y++;
}
echo "<br>";

//Do while loop
$z=1;

do{
    echo $z."<br>";
    $z++;
}while($z<6);

echo "<br>";

//foreach loop
$posts=['First Post','Second Post','Third Post'];

/* for($x=0;$x<count($posts);$x++){
echo $posts[$x];
} */

foreach($posts as $index=> $post){
    echo $index.' - '.$post."<br>";
}

?>