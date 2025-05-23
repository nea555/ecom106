<?php
function add2nums($x, $y)
{
    return $x + $y;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $total = add2nums(21, 20);
    echo "Total value is $total <br>";
    for ($i = 0; $i < 10; $i++) 
    {
        $total=add2nums($i,$i);
        echo $total."<br>"; 
    }
    ?>


</body>

</html>