<!DOCTYPE html>
<?php
require_once "action/db_connect.php";

$sql = "SELECT * FROM library";
$result = mysqli_query($conn, $sql);
$body = "";

if (mysqli_num_rows($result) == 0) {
    $body = "No results";
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        $body .= "<div class='card' style='width: 22rem; margin: 5% 5% 5% 5%; text-align: center;'>
  <div class='card-body'>
  <img class='card-img' src='pictures/" . $row['photo'] . "'>
    <h4 class='card-title' style='margin-top:4%'>{$row["title"]}</h4>
    <p class='card-text'>{$row["type"]}</p>
    <a href='details.php?id={$row["library_id"]}' class='btn btn-primary' style='width: 75%; margin-bottom: 10px'>Show details</a>
    <a href='update.php?id={$row["library_id"]}' class='btn btn-success'>Update</a>
    <a href='delete.php?id={$row["library_id"]}' class='btn btn-danger'>Delete</a>
  </div>
</div>";
    }
}

mysqli_close($conn);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRPHP</title>
    <?php require_once 'components/boot.php' ?>

    <style type="text/css">
        

        .card-img {
            width: 300px !important;
            height: 300px !important;
        }
     

       
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top" style="padding: 30px">
  <div class="container-fluid">
    <a class="navbar-brand"href="#">Andi's Library</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="create.php">Add Items</a>
        </li>
      </ul>
    </div>
  </div>

  
</nav>
<div class="hero" style="margin-top: 120px; padding-left:20%">
    <img src="pictures/library.png" alt="" >
  </div>

  <div class="row rows-col-lg-4 rows-col-md-2 rows-col-sm-1">
            <?= $body ?>
        </div>

        <footer class="text-center" style="margin-top: 3%;">

<div class="text-center text-light p-3 bg-info">
    © 2020 Copyright:
    <a class="text-light" href="">Andrea Bicskei</a>
</div>

</footer>
</body>
</html>