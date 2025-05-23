<?php

$str="A";
$str[2]="d";
$str[1]="n";
$str=$str."i"; //concatenate str car and str literal 
print $str."<br>";
 
$name="Brian";
echo $name."<br>";
$a="Hello";
$b=$a."World!";
echo $b;

    $c=4;
    $d=2;
    $e=$c+$d+($c/$d);
    print $e; 

    echo "<br>";
    $nums=[1,44,55,22];
    $fruits=array('apple','grapes','pear');

    var_dump($nums); 
    echo "<br>".$fruits[0];

    //Associative Array
    $colors=[
        1=>'red',
        2=>'blue',
        3=>'purple'
    ];
    echo "<br>".$colors[3]; 

    $hex=[
        'red'=>'#f00',
        'blue'=>'#0f0'
    ];
    echo "<br>".$hex['blue'];

    $person=[
        'first name'=>'Brian',
        'last name'=>'Thant',
        'email'=>'brainthant@gmail.com'
    ];

    echo "<br>".$person['first name'];

    $people=[
    [
        'first name'=>'Brian',
        'last name'=>'Thant',
        'email'=>'brainthant@gmail.com'
    ],

    [
        'first name'=>'Briana',
        'last name'=>'Thant',
        'email'=>'brainathant@gmail.com'
    ],

    [
        'first name'=>'Ryan',
        'last name'=>'Thant',
        'email'=>'ryanthant@gmail.com'
    ]
];

echo "<br>". $people[1]['first name']."<br>";

var_dump(json_encode($people)); 
?>