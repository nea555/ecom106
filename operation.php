<?php
require_once "dbconnect.php";
if(!isset($_SESSION)){
    session_start();
}

if (isset($_POST['insert_movie'])) {
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $rdate = $_POST['rdate'];
    $rtime = $_POST['rtime'];
    $company = $_POST['company'];
    $country = $_POST['country'];

    //echo "$title <br> $genre <br> $rdate <br> $rtime <br> $company <br> $country";

    try {
        $sql = "insert into movies values(?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $status = $stmt->execute([null, $title, $rdate, $rtime, $genre, $company, $country]);
        if ($status) {
            //echo "movie record has been inserted successfully!";
            $_SESSION['insertSuccess']="One movie record has been inserted successfully!";
            header("Location:view.php");
        }
    } catch (PDOException $e) {
    }
}

if($_SERVER['REQUEST_METHOD']=="GET" && isset($_GET['mid'])){
    echo "in edit";
}
?>
