<?php
session_start();
$showAlert = false;
if ( !isset( $_SESSION['loggedin'] ) || $_SESSION['loggedin'] != true )
{
    header("location: index.php");    
    exit();
}
include 'includes/connection.php';
if (isset($_POST['update'])) {
    
    $sno = $_GET['sno']; 
    $username = $_POST['username']; 
    $password = $_POST['password'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $country = $_POST['country'];

$q = "update users set sno = $sno, username='$username', password='$password',email= '$email',contact= '$contact',country='$country'  where sno = $sno";
    $query = mysqli_query($conn, $q);
    
    if ($query)
      $showAlert = true;
     
    else 
      echo mysqli_error($conn);
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
  <link rel="stylesheet" href="css/bulma.min.css">

    <!-- fontawesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">


    <title>Edit Profile</title>
  </head>
  <body>
    <?php require 'includes/navbar.php' ?>
    <?php
  if ($showAlert) {
    echo ' <article class="message is-success">
    <div class="message-body"> Profile Updated successfully!
    </div>
  </article>';
  }

  ?>
<div class="column is-5 is-offset-4">
  <div class="box">
  <?php
     include 'includes/connection.php';
        $sno = $_GET['sno'];
        $showquery = "SELECT * FROM users WHERE sno = $sno";
        $run = mysqli_query($conn, $showquery);
        while ($res = mysqli_fetch_assoc($run)) {
          $res['username'];
          $res['password'];
?>
  <h1 class="title is-3"> 
  Edit your profile <span class="has-text-danger has-text-weight-bold"> <?php echo $res['username']; ?> 📝 </span></h1>
  <!-- ============================================= -->
  <form method="post">
        <div class="form-group">
    
      <div class="field">
            <label class="label">Username</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input is-small" name="username" type="text" value="<?php echo $res['username']; ?>" required>
              <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
              </span>
            </div>
          </div>

          <div class="field">
            <label class="label">Password</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input is-small" name="password" type="text" value="<?php echo $res['password']; ?>" required>
              <span class="icon is-small is-left">
              <i class="fas fa-lock"></i>

              </span>
            </div>
          </div>

          <div class="field">
            <label class="label">Email</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input is-small" name="email" type="text" value="<?php echo $res['email']; ?>" required>
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
            </div>
          </div>

          <div class="field">
            <label class="label">Contact</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input is-small" name="contact" maxlength="10" type="number" value="<?php echo $res['contact']; ?>" required>
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
            </div>
          </div>

          <div class="field">
            <label class="label">Country : <?php echo $res['country']; ?> </label>
            
            <div class="control has-icons-left">
              <div class="select is-small">
              <select name="country">
                  <option selected>Country</option>
                  <option>India</option>
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


        <?php
        }
        ?>      
         
        <button type="submit" name="update" class="button is-success">Update 🙄</button>
     </form>

  

</div> <!-- box -->
</div>

  </body>
</html>
