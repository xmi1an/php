<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cn = mysqli_connect("localhost", "root", "", "dharmi") or die("connection not established");
    $fnm = $_REQUEST["fname"];
    $fem = $_REQUEST["femail"];
    $fb = $_REQUEST["ffeedback"];
    $ins = "insert into feedbackmaster(fname,femail,ffeedback) values('$fnm','$fem','$fb')";
    mysqli_query($cn, $ins) or die("record not inserted");
    echo "<script language'javascript'>alert('record insterted successfully');</script>";
    mysqli_close($cn);
}
?>
<html>

<head>
    <title> feedback </title>
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
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Email</label>
                                </td>
                                <td>
                                    <input type="text" name="femail" placeholder="Enter your email" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="FeedBack">FeedBack</label>
                                </td>
                                <td>
                                    <textarea id="FeedBack" name="ffeedback" placeholder="Enter your FeedBack" rows="4" cols="50">
			</textarea>
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