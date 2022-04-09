<?php
session_start();
// include('../includes/config.php');
$con = mysqli_connect("localhost", "root", "", "e-bidding_portal");
if (mysqli_connect_errno()) {
    echo "Connection Fail" . mysqli_connect_error();
}

if (isset($_POST['submit'])) {
    $name = $_POST['u_name'];
    $email = $_POST['u_email'];
    $mno = $_POST['u_mobile_no'];
    $pwd = $_POST['u_pwd'];

    $query = "insert into registration(`u_name`, `u_email`, `u_mobile_no`, `u_pwd`, `u_reset_pwd`) VALUES ('$name','$email','$mno','$pwd','$pwd')";

    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<script>
        alert('Signup Successfull! Now You Can Login');
        window.location.href='login.php';
        </script>";
    } else {
        // echo "<script>alert('Invalid Details.');</script>";
        echo mysqli_error($con);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }
</style>

<body>

    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form action="" method="POST">
                        <!--1. Username input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form1Example13">Username</label>
                            <input type="text" name="u_name" id="form1Example13" class="form-control form-control-lg" />
                        </div>

                        <!--2. Email input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form1Example13">Email address</label>
                            <input type="email" name="u_email" id="form1Example13" class="form-control form-control-lg" />
                        </div>

                        <!--3. Mobile Number input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form1Example13">Mobile Number</label>
                            <input type="number" name="u_mobile_no" id="form1Example13" class="form-control form-control-lg" />
                        </div>

                        <!--4. Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form1Example13">Password</label>
                            <input type="text" name="u_pwd" id="form1Example13" class="form-control form-control-lg" />
                        </div>



                        <!-- Submit button -->
                        <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Signup</button>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                        </div>

                        <div class="d-grid gap-2 col-6 mx-auto mb-5">
                            <a class="btn btn-primary btn-xs col-lg-12 " style="background-color: #3b5998;border-radius: 8px;" href="login.php" role="button">
                                <i class="fab fa-facebook-f me-2"></i>Login With Username
                            </a>

                            <a class="btn btn-primary btn-xs col-lg-12" style="background-color: #3b5998;border-radius: 8px;" href="#!" role="button">
                                <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
                            </a>

                            <a class="btn btn-primary btn-xs col-lg-12" style="background-color: #55acee;border-radius: 8px;" href="#!" role="button">
                                <i class="fab fa-twitter me-2"></i>Continue with Twitter</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</html>