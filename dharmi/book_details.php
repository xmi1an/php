<?php
session_start();
include_once 'include/config.php';

$book_no = $_GET['booknumber'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php // include("header.php"); 
    ?>
    <!-- Page Content -->
    <div class="container">
        <!-- Portfolio Item Heading -->
        <!-- Portfolio Item Row -->
        <div class="row justify-content-center gx-5">
            <div class="col-md-4 bg-light border rounded">
                <?php
                $sql = "select * from bookmaster where bno = '$book_no'";
                $query = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <h6 class="my-3"><?php $row['bname'] ?> </h6>
                    <img class="img-fluid" src="<?php echo $row['bphoto'] ?>">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem..</p>
            </div>
            <div class="col-md-6 bg-light border rounded">
                <h3 class="my-3">Book Details</h3>
                <ul>
                    <li>Book Name: <?php echo $row['bname'] ?></li>
                    <li>Book Author: <?php echo $row['bauthor'] ?></li>
                    <li>Book Actual Price: <?php echo $row['bactualprice'] ?></li>
                    <li>Book Sell Price: <?php echo $row['bsellprice'] ?></li>
                    <li>Book Edition: <?php echo $row['bedition'] ?></li>
                    <li>Book Remark: <?php echo $row['bremark'] ?></li>
                <?php } ?>

                <h3 class="my-3 text-center">Seller Details</h3>
                <?php
                $sql = "select * from registration";
                $query = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <p>Lorem ipsum dolor sit amet..</p>
                    <h3 class="my-3">Seller Details</h3>
                    <ul>
                        <!-- Seller Name -->
                        <li>Seller Name : <?php echo $row['uname']; ?></li>
                        <!-- Seller Address -->
                        <li>Seller Address : <?php echo $row['uaddress']; ?></li>
                        <!-- Seller Contact -->
                        <li>Seller Contact : <?php echo $row['contactno']; ?></li>
                        <!-- Seller Email -->
                        <li>Seller Email : <?php echo $row['email']; ?></li>
                    </ul>
                <?php  }  ?>

                <button style="background-color: #008CBA; color: white;" type="button">Contact Seller</button>
                <button style="background-color: #e7e7e7; color: black;" onclick="history.back()" type="button" class="btn btn-dark">Back</button>
            </div>
        </div>
        <!-- /.row -->
        <br>
    </div>
    <!-- /.row -->
</body>

</html>