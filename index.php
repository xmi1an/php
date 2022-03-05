<?php
if (isset($_POST['send'])) {
    $uname = $_POST['uname'];
    $upass = $_POST['upass'];

    if (strlen($uname) >= 8) {
        echo ("Username is OK");
    } else
        echo ("Invalid Username");
}

?>
<!doctype html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="text" name="uname" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="text" name="upass" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" name="send" class="btn btn-primary">Submit</button>
        </form>
    </div>


</body>

</html>