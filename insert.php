<?php
require_once "dbconnect.php";
//58	6/20/2006	1065659812	151	Pirates of the Caribbean: Dead Man's Chest	7	Walt Disney Pictures	Adventure	Jamaica
$title = "Pirates of the Caribbean: Dead Man's Chest";
$release_date = "2006-06-20";
$runtime = 151;
$genre = "Adventure";
$company = "Walt Disney Pictures";
$country = "Jamaica";

$sql = "insert into movies(title,release_date,runtime,genre,company,country) 
      values(?,?,?,?,?,?)";

$stat = $pdo->prepare($sql);

$status = $stat->execute([$title, $release_date, $runtime, $genre, $company, $country]);

if ($status) {
    echo "One movie record has been inserted!";
}
?>