<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cn = mysqli_connect("localhost", "root", "", "dharmi") or die("connection not established");
    $gt = $_REQUEST["gtype"];
    $gr = $_REQUEST["grievance"];

    // Validation for gtype
    if (empty($gt)) {
        $typeError = "Type is mandatory";
    } else {
        if (!preg_match("/^[a-zA-Z ]*$/", $gt)) {
            $typeError2 = "Only letters and white space allowed";
        }
    }
    // Validation for grievance
    if (empty($gr)) {
        $grievanceError = "Grievance is mandatory";
    } else {
        if (!preg_match("/^[a-zA-Z ]*$/", $gr)) {
            $grievanceError2 = "Only letters and white space allowed";
        } else {
            $ins = "insert into grievance(gtype,grievance) values('$gt','$gr')";
            mysqli_query($cn, $ins) or die("record not inserted");
            echo "<script language'javascript'>alert('record insterted successfully');</script>";
        }
    }
    mysqli_close($cn);
}
?>
<html>

<head>
    <title> grievance </title>
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

                <form name="form1" method="post" action="grievance.php">
                    <center>
                        <table class="table-hover">
                            <tr>
                                <td colspan="2">
                                    <h2> Grievance </h2>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Type</label>
                                </td>
                                <td>
                                    <input type="text" name="gtype" placeholder="Enter your grievance type" />
                                    <span class="errorColor">* <?php if (isset($typeError)) {
                                                                    echo $typeError;
                                                                } ?> <span>
                                            <span class="errorColor"><?php if (isset($typeError2)) {
                                                                            echo $typeError2;
                                                                        } ?> </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="Grievance">Grievance</label>
                                </td>
                                <td>
                                    <textarea id="Grievance" name="grievance" placeholder="Enter your Grievance" rows="4" cols="50">
			</textarea>
                                    <span class="errorColor">* <?php if (isset($grievanceError)) {
                                                                    echo $grievanceError;
                                                                } ?> <span>
                                            <span class="errorColor"><?php if (isset($grievanceError2)) {
                                                                            echo $grievanceError2;
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