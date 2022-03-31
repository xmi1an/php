<?php
session_start();
include_once 'config/database.php';
// Get Book Details
$book_id = $_GET['book_id'];
$book_name = $_GET['book_name'];
$book_author = $_GET['book_author'];
$book_price = $_GET['book_price'];
$book_image = $_GET['book_image'];
$book_description = $_GET['book_description'];
$book_category = $_GET['book_category'];
$book_pages = $_GET['book_pages'];
$book_language = $_GET['book_language'];

// Get Publisher Details
$publisher_id = $_GET['publisher_id'];
$publisher_name = $_GET['publisher_name'];
$publisher_address = $_GET['publisher_address'];
$publisher_phone = $_GET['publisher_phone'];
$publisher_email = $_GET['publisher_email'];
$publisher_website = $_GET['publisher_website'];
$publisher_description = $_GET['publisher_description'];
$publisher_image = $_GET['publisher_image'];

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
    <!-- Page Content -->
    <div class="container">
        <!-- Portfolio Item Heading -->
        <h1 class="my-4 text-center">Book Detail </h1>
        <!-- Portfolio Item Row -->
        <div class="row justify-content-center gx-5">
            <div class="col-md-4 bg-light border rounded">
                <?php
                $sql = "select * from bookmaster where bookdetails = '$bookdetails' ";
                $query = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <h6 class="my-3"><?php $row['book_name'] ?> </h6>
                    <img class="img-fluid" src="https://via.placeholder.com/750x500" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem..</p>
                    <h3 class="my-3">Book Details</h3>
                    <ul>
                        <li>Book Name: <?php echo $row['book_name'] ?></li>
                        <li>Book Author: <?php echo $row['book_author'] ?></li>
                        <li>Book Price: <?php echo $row['book_price'] ?></li>
                        <li>Book Image: <?php echo $row['book_image'] ?></li>
                        <li>Book Description: <?php echo $row['book_description'] ?></li>
                        <li>Book Category: <?php echo $row['book_category'] ?></li>
                        <li>Book Pages: <?php echo $row['book_pages'] ?></li>
                        <li>Book Language: <?php echo $row['book_language'] ?></li>
                    <?php } ?>
                    </ul>
            </div>
            <div class="col-md-6 bg-light border rounded">
                <h3 class="my-3 text-center">Seller Details</h3>
                <?php $sql = "select * from seller_details where seller_id = '$seller_id' ";
                $query = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($query)) { ?>
                    <p>Lorem ipsum dolor sit amet..</p>
                    <h3 class="my-3">Seller Details</h3>
                    <ul>
                        <!-- Seller Name -->
                        <li><?php echo $row['seller_name']; ?></li>
                        <!-- Seller Address -->
                        <li><?php echo $row['seller_address']; ?></li>
                        <!-- Seller Contact -->
                        <li><?php echo $row['seller_contact']; ?></li>
                        <!-- Seller Email -->
                        <li><?php echo $row['seller_email']; ?></li>
                    </ul>
                <?php } ?>
                <button type="button" class="btn btn-success">Contact Seller</button>
                <button onclick="history.back()" type="button" class="btn btn-dark">Back</button>
            </div>
        </div>
        <!-- /.row -->
        <br>
    </div>
    <!-- /.row -->
</body>

</html>