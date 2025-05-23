<?php

function staticTest()
{
    static $x=0;
    echo $x."<br>";
    $x++;
}
staticTest();
staticTest();
staticTest();

echo phpversion(); 
?>

