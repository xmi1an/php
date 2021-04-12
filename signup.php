<?php
session_start();
$showAlert = false;
$showError = false;
if ( isset ($_POST['signup']) ) {
  include 'includes/connection.php';
  $username = $_POST["username"];
  $password = $_POST["password"];
  $email = $_POST["email"];
  $contact = $_POST["contact"];
  $country = $_POST["country"];

  $sql = "INSERT INTO `users` ( `username`, `password`, `email`,`contact`, `country`) VALUES ('$username', '$password', '$email','$contact', '$country')";
  $result = mysqli_query($conn, $sql);
  
if ($result)
    $showAlert = true;
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
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <title>SignUp</title>
</head>

<body>
  <?php require 'includes/navbar.php' ?>
  <?php
  if ($showAlert) {
    echo ' <article class="message is-success">
    <div class="message-body">🎉 Your account is now created and you can <a href="index.php">login</a>
    </div>
  </article>';
  }

  ?>
<a href="index.php"></a>
  <div class="container mt-3">
    <div class="column is-4 is-offset-4">

      <form action="" method="POST">
        <div class="box">
          <div class="field">
            <label class="label">Username</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input is-small" name="username" type="text" placeholder="username" required>
              <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
              </span>
            </div>
          </div>

          <div class="field">
          <label class="label">Password</label>
            <p class="control has-icons-left">
              <input class="input is-small" name="password" type="password" placeholder="Password" required>
              <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
              </span>
            </p>
          </div>

          <div class="field">
            <label class="label">Email</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input is-small" name="email" type="email" placeholder="your email" required>
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
                </span>
            </div>
          </div>

          <div class="field">
            <label class="label">Contact No</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input is-small" name="contact" maxlength="10" type="number" placeholder="your contact number" required>
              <span class="icon is-small is-left">
                <i class="fas fa-phone"></i>
                </span>
            </div>
          </div>

          <div class="field">
            <label class="label">Country</label>
            <div class="control has-icons-left">
              <div class="select is-small">
                <select name="country" required>
                  <option selected>India</option>
                  <option>Banglore</option>
                  <option>Brazil</option>
                  <option>United States</option>
                </select>
              </div>
              <span class="icon is-small is-left">
                <i class="fas fa-globe"></i>
              </span>
            </div>
          </div>

          <div class="field is-grouped">
            <div class="control">
              <button name="signup" class="button is-link">🙇🏻‍♀️Submit</button>
            </div>
            
          </div>
        </div>
      </form>



    </div>
  </div>

  </body>
</html>