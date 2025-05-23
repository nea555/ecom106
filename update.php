<?php
require_once "dbconnect.php";
//1452	6/28/2006	391081192	154	Superman Returns	5.4	DC Comics	Adventure	United States of America
$title = "The Lone Ranger";
//$release_date="2013-07-03";
$runtime = 149;
$genre = "Action";
$company = "Walt Disney Pictures";

$id=13;

$sql = "update movies set title=?, runtime=?,genre=?, company=?
        where id=?";

$stat = $pdo->prepare($sql);

$status = $stat->execute([$title, $runtime, $genre, $company,$id]);

if ($status) {
    echo "One movie record with $id has been updated!";
}
?>