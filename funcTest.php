<?php
function writeYourName()
{
    echo "Hello, Nea";
}

$multiply=fn($n1,$n2)=>$n1*$n2;
echo $multiply(9,9);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <?php
            for ($i = 0; $i < 10; $i++) {
                writeYourName();
                echo "<br>";
            }

            ?> -->
    <ul>
        <?php
        for ($i = 0; $i < 10; $i++)
            echo "<li>" . writeYourName() . "</li>";
        ?>
    </ul>
</body>

</html>