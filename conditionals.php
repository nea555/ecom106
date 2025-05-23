
<!-- < less than
> grater than
<= less than or equal to
>= greater than or equal to
== equal to
=== identical to
!= not equal to
!== not identical to -->

<?php
$age=20;

if($age >=18){
    echo 'You are old enough to vote';
}else{
    echo 'You are not old enough to vote';
}

echo "<br>";

$posts=['First Post'];

/* if(!empty($posts)){
    echo $posts[0];
}else{
    echo 'No Posts';
} */

echo !empty($posts) ? $posts[0]:'No Posts';
echo "<br>";
$firstPost=!empty($posts) ? $posts[0] :'No Posts';
$firstPost=$posts[0]??null;

echo "<br>";

$favcolor='red';

switch($favcolor){
    case 'red':
    echo 'it is red';
    break;
    case 'blue':
    echo 'it is blue';
    break;
    default:
    echo 'neither red nor blue';
}
?>




