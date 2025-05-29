<?php
require_once "dbconnect.php";
if (!isset($_SESSION)) {
    session_start();
}
try {
            $sql = "select * from movies order by title limit 10";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $movies=$stmt->fetchAll(PDO::FETCH_ASSOC);

    

} catch (PDOException $e) {
    echo $e->getMessage();

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-outline-primary rounded" href="./insertUI.php">Add New</a>

            </div>
        </div>
        <div class="row">
            
            <div class="col-md-10">
                <?php
                if (isset($_SESSION['insertSuccess'])) { ?>

                    <p class="alert alert-success">
                        <?php echo $_SESSION['insertSuccess']; ?>

                    </p>

                <?php }

                ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Genre</th>
                            <th>Runtime</th>
                            <th>Release Date</th>
                            <th>Company</th>
                            <th>Country</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($movies as $movie){ ?>
                        <tr>
                            <td><?php echo $movie['title'] ?></td>
                            <td><?php echo $movie['genre'] ?></td>
                            <td><?php echo $movie['runtime'] ?></td>
                            <td><?php echo $movie['release_date'] ?></td>
                            <td><?php echo $movie['company'] ?></td>
                            <td><?php echo $movie['country'] ?></td>
                            <td><a class="btn btn-primary" href="./operation.php?mid=<?php echo $movie['id']; ?>">Edit</a></td>
                            <td><a class="btn btn-danger" href="">Delete</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>