<?php
session_start();
// include('../includes/config.php');
$con = mysqli_connect("localhost", "root", "", "e-bidding_portal");
// if (mysqli_connect_errno()) {
//     echo "Connection Fail" . mysqli_connect_error();
// }

if (isset($_POST['submit'])) {
    $name = $_POST['u_name'];
    $pwd = $_POST['u_pwd'];

    $query = "select * from registration where u_name='$name' && u_pwd='$pwd' ";

    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if ($row > 0) {
        echo ("<script> alert('Login Successfull!');
                window.location.href='index.php'; </script>");
    } else {
        echo "<script>alert('Invalid Details.');</script>";
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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

                        <!--2. Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form1Example13">Password</label>
                            <input type="text" name="u_pwd" id="form1Example13" class="form-control form-control-lg" />
                        </div>

                        <!-- Submit button -->
                        <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                        <!-- forgot password -->
                        <div class="text-center mt-4">
                            <a href="forgot_password.php">Forgot password?</a>
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                        </div>

                        <div class="d-grid gap-2 col-6 mx-auto mb-5">
                            <a class="btn col-lg-12" style="background-color: #F24A72; color: white;  border-radius: 8px;" href="signup.php" role="button"><i class="fa-solid fa-user-plus me-3"></i></i>Signup</a>

                            <a class="btn col-lg-12" style="background-color: #3b5998;color: white; border-radius: 8px;" href="#!" role="button">
                                <i class="fa-brands fa-facebook-f me-3"></i>Continue with Facebook</a>

                            <a class="btn col-lg-12" style="background-color: #55acee;color: white;border-radius: 8px;" href="#!" role="button">
                                <i class="fa-brands fa-twitter me-3"></i>Continue with Twitter</a>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </section>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</html>