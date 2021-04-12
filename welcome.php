<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: index.php");
  exit();
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSS (use Only One)-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
  <!-- <link rel="stylesheet" href="css/bulma.min.css"> -->

  <title> Hello👋🏻 - <?php echo $_SESSION['username']; ?> </title>
</head>

<body>
  <?php require 'includes/navbar.php' ?>

  <section class="section">

  </section>
  <?php
  include 'includes/connection.php';
  $sno = $_SESSION['sno'];
  $showquery = "SELECT * FROM users WHERE sno = $sno";
  $run = mysqli_query($conn, $showquery);
  while ($res = mysqli_fetch_assoc($run)) {
    $res['username'];
    $res['password'];
  ?>

    <div class="column is-5 is-offset-4">
      <div class="box">
        <h1 class="title is-3 ">
          Hello <span class="has-text-danger has-text-weight-bold"> <?php echo $res['username']; ?> 👋🏻 </span>
        </h1>

        <p class="menu-label">
          Your Profile
        </p>
        <ul class="menu-list">
          <a> <p> <strong> Username : </strong> <?php echo $res['username']; ?> </p> </a>
          <a> <p> <strong> Email : </strong>  <?php echo $res['email']; ?> </p>  </a>
          <a> <p> <strong> Contact : </strong> <?php echo $res['contact']; ?> </p> </a>
          <a> <p> <strong> Country : </strong> <?php echo $res['country']; ?> </p>  </a>

        </ul>
      <?php  } ?>

      <div class="field is-grouped py-4">
        <p class="control">
          <a href="edit.php?sno=<?php if (isset($_SESSION['loggedin'])) {
                                  $sno = $_SESSION['sno'];
                                  echo $sno;
                                } ?>" class="button is-link is-light">📝Edit Profile </a>
        </p>


        <a class="button is-danger" href="logout.php">
          🚶🏻‍♂️Logout
        </a>


      </div>
      </div> <!-- box -->
    </div>
</body>

</html>