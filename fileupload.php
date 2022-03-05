<?php
$con = mysqli_connect("localhost", "root", "", "test");
if (isset($_POST['submit'])) {
    $myfile = $_FILES['fileul'];
    $filename = $myfile['name'];
    $tempfile = $myfile["tmp_name"];

    $dest = "images/" . $filename;
    $fileext = explode('.', $filename);
    $tolow = strtolower(end($fileext));
    $allowedext = array('jpg', 'png', 'jpeg');
    if (in_array($tolow, $allowedext)) {
        if (move_uploaded_file($tempfile, $dest)) {

            $con = mysqli_connect("localhost", "root", "", "test");
            $username = $_POST['uname'];
            $insertquery = "INSERT INTO `imageupload`(`username`, `image`) VALUES ('$username','$dest')";
            mysqli_query($con, $insertquery);

            echo "<script> alert('File Uploaded!') </script>";
        } else {
            echo "<br><br><br> Sorry, there was an error uploading your file.";
        }
    }
    print_r("<br>");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Registration Details</h5>
                <p class="card-text">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group  mb-3">
                        <label for="uname">Username</label>
                        <input type="text" class="form-control" name="uname" id="uname" aria-describedby="helpId" placeholder="">
                    </div>

                    <div class="form-group mb-3">
                        <label for="filee">Select Image </label>
                        <input type="file" name="fileul" id="filee">
                    </div>

                    <div class="mb-3 text-center">
                        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                    </div>
                </form>
                </p>
            </div>
        </div>
        <!-- card end -->


    </div>
    <div class="container my-5">
        <h1 class="text-white bg-dark text-center"> Users </h1>

        <table class="table table-striped table-hover ">
            <thead>
                <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Photo</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $displayquery = "SELECT * FROM `imageupload`";
                $run = mysqli_query($con, $displayquery);
                $rows = mysqli_num_rows($run);

                while ($res = mysqli_fetch_array($run)) {

                ?> <tr>
                        <td><?php echo $res['username'] ?></td>
                        <td><img width="75px" height="75px" class="img-thumbnail" src="<?php echo $res['image'] ?>"></td>
                    <?php }
                    ?>
                    </tr>

            </tbody>
        </table>



    </div>
</body>

</html>