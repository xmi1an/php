<?php
session_start();
$login = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'includes/connection.php';
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "select * from users where username='$username' AND password='$password' ";

    $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);
    $sno = mysqli_fetch_all($result);

    if ($num == 1) {

        $login = true;
        $_SESSION['loggedin'] = true;
        $_SESSION['sno'] = $sno[0][0];
        $_SESSION['username'] = $username;

        header("location: welcome.php");
    } else {
        $showError = true;
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS (use Only One)-->
  <link rel="stylesheet" href="css/bulma.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">

    <!-- fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">


    <title>Login</title>
</head>

<body>
    <?php  require 'includes/navbar.php' ?>
    
    <?php
    if ($login) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"> </span>
        </button>
    </div> ';
    }

    if ($showError) {
        echo ' <article class="message is-danger is-medium">
        <div class="message-body is-medium">
        Invalid Credentials
        </div>
      </article> ';
    }
    ?>


    <!-- LOGIN FORM begins -->
    <div class="container mt-3">
        <div class="column is-4 is-offset-4">

            <form action="" method="POST">
                <div class="box">
                <div class="container has-text-centered mb-4">
                <h1 class="title is-3">Please Login😅</h1>
                </div>
                    <div class="field">
                        <label class="label">Username</label>
                        <div class="control has-icons-left has-icons-right">
                            <input class="input is-normal" name="username" type="text" placeholder="username">
                            <span class="icon is-normal is-left">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Password</label>
                        <p class="control has-icons-left">
                            <input class="input is-normal" name="password" type="password" placeholder="Password">
                            <span class="icon is-normal is-left">
                                <i class="fas fa-lock"></i>
                            </span>
                        </p>
                    </div>

                    <div class="control">
                        <button class="button is-link">Login💁🏻‍♂️</button>
                    </div>

                </div>
                </form>
        </div>
    </div>
</body>

</html>