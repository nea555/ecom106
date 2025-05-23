<?php
$x=10;
$y=20;

function accessG()
{
    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
}
accessG();
echo $y;
?>