<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cn = mysqli_connect("localhost", "root", "", "dharmi") or die("connection not established");
    $fnm = $_REQUEST["fname"];
    $fem = $_REQUEST["femail"];
    $fb = $_REQUEST["ffeedback"];
    $fbnew = filter_var($fb, FILTER_SANITIZE_STRING);

    // Validation for name
    if (empty($fnm)) {
        $nameError = "Name is mandatory";
    } else {
        if (!preg_match("/^[a-zA-Z ]*$/", $fnm)) {
            $nameError2 = "Only letters and white space allowed";
        }
    }

    // Validation for email
    if (empty($fem)) {
        $emailError = "Email is mandatory";
    } else {
        if (!filter_var($fem, FILTER_VALIDATE_EMAIL)) {
            $emailError2 = "Invalid email format";
        }
    }

    // Validation for feedback
    if (empty($fbnew)) {
        $feedbackError = "Feedback is mandatory";
    } else {
        if (!preg_match("/^[a-zA-Z ]*$/", $fbnew)) {
            $feedbackError2 = "Only letters and white space allowed";
        } else {
            $ins = "insert into feedbackmaster(fname,femail,ffeedback) values('$fnm','$fem','$fbnew')";
            mysqli_query($cn, $ins) or die("record not inserted");
            echo "<script language'javascript'>alert('record insterted successfully');</script>";
        }
    }


    mysqli_close($cn);
}
?>
<html>

<head>
    <title> feedback </title>
    <style>
        .errorColor {
            color: #D30000;
        }
    </style>
</head>

<body>
    <?php include("dheader.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">

                <form name="form1" method="post" action="feedback.php">
                    <center>
                        <table class="table-hover">
                            <tr>
                                <td colspan="2">
                                    <h2> FeedBack </h2>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label>Name</label>
                                </td>
                                <td>
                                    <input type="text" name="fname" placeholder="Enter your Name" />
                                    <span class="errorColor">* <?php if (isset($nameError)) {
                                                                    echo $nameError;
                                                                } ?> <span>
                                            <span class="errorColor"><?php if (isset($nameError2)) {
                                                                            echo $nameError2;
                                                                        } ?> </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Email</label>
                                </td>
                                <td>
                                    <input type="text" name="femail" placeholder="Enter your email" />
                                    <span class="errorColor">* <?php if (isset($emailError)) {
                                                                    echo $emailError;
                                                                } ?> <span>
                                            <span class="errorColor"><?php if (isset($emailError2)) {
                                                                            echo $emailError2;
                                                                        } ?> </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="FeedBack">FeedBack</label>

                                </td>
                                <td>
                                    <textarea id="FeedBack" name="ffeedback" placeholder="Enter your FeedBack" rows="4" cols="50">
			</textarea>
                                    <span class="errorColor">* <?php if (isset($feedbackError)) {
                                                                    echo $feedbackError;
                                                                } ?> <span>
                                            <span class="errorColor"><?php if (isset($feedbackError2)) {
                                                                            echo $feedbackError2;
                                                                        } ?> </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="reset"> Reset </button>
                                </td>
                                <td>
                                    <button type="submit"> Submit </button>
                                </td>
                            </tr>
                        </table>
                    </center>
                </form>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>

</html>