<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $myvar="Tuesday";
    echo $myvar; 

    echo "<br>"; 

    $str1="Today is $myvar";
    echo $str1;

    echo "<br>"; 

    echo<<<THE_END
    PHP stands for "PHP: Hypertext Preprocessor".
The acronym "PHP" is therefore, usually referred to as a recursive acronym
because the long form contains the acronym itself. As this text is being written in
a here-doc there is no need to escape the double quotes
THE_END;

echo "<br>"; 

$name="Max";
$str=<<<DEMO
<b>Hello</b> $name <br>
This is a demo messge
with heredoc.
DEMO;
echo $str; 

    ?> 
</body>
</html>