<?php
$x = 5;
function myTest()
{
    global $x;
    echo $x;
    $name="Brrr";
    echo "<br>".$name;
}
myTest();

echo "<br> Global variable " . $x . "<br>";

