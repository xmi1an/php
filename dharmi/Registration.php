<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cn = mysqli_connect("localhost", "root", "", "dharmi") or die("connection not established");
    $nm = $_REQUEST["name"];
    $ut = $_REQUEST["type"];
    $ua = $_REQUEST["address"];
    $ctn = $_REQUEST["contactno"];
    $em = $_REQUEST["email"];
    $pw = $_REQUEST["password"];

    // Validation for name
    if (empty($nm)) {
        $nameError = "Name is mandatory";
        echo "Name is required";
    } else {
        $nm = test_input($nm);
        if (!preg_match("/^[a-zA-Z ]*$/", $nm)) {
            echo "Only letters and white space allowed";
        }
    }

    // Validation for type
    if (empty($ut)) {
        $typeError = "Type is mandatory";
    } else {
        $ut = test_input($ut);
        if (!preg_match("/^[a-zA-Z ]*$/", $ut)) {
            echo "Only letters and white space allowed";
        }
    }

    // Validation for address
    if (empty($ua)) {
        $addressError = "Address is mandatory";
    } else {
        $ua = test_input($ua);
        if (!preg_match("/^[a-zA-Z ]*$/", $ua)) {
            echo "Only letters and white space allowed";
        }
    }

    // Validation for contactno
    if (empty($ctn)) {
        $contactnoError = "Contact no is mandatory";
    } else {
        $ctn = test_input($ctn);
        if (!preg_match("/^[0-9]*$/", $ctn)) {
            echo "Only numbers allowed";
        }
    }

    // Validation for email
    if (empty($em)) {
        $emailError = "Email is mandatory";
    } else {
        $em = test_input($em);
        if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
        }
    }
    // Validation for password
    if (empty($pw)) {
        $passwordError = "Password is mandatory";
    } else {
        if (strlen($pw) < 8) {
            echo "Password must be atleast 8 characters";
        } else {
            $ins = "insert into registration(uname,utype,uaddress,ucontact_no,email,upassword) values('$nm','$ut','$ua','$ctn','$em','$pw')";
            $check = mysqli_query($cn, $ins);
            if ($check) {
                echo ("Data Inserted");
            } else {
                mysqli_error($cn);
            }

            echo "<script language'javascript'>alert('record insterted successfully');</script>";
            $_SESSION["unm"] = $em;
            $_SESSION["utype"] = $ut;
            header("location:home.php");
        }
    }




    mysqli_close($cn);
}
?>

<html>

<head>
    <title> reg </title>
</head>
<style>
    .errorColor {
        color: #D30000;
    }
</style>

<body>
    <?php include("header.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">

                <form name="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <center>
                        <table>
                            <tr>
                                <td colspan="2">
                                    <h2> Registration </h2>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label>Name</label>
                                </td>
                                <td>
                                    <input type="text" name="name" placeholder="Enter your Name" /><br><br>
                                    <span class="errorColor">* <?php if (isset($nameError)) {
                                                                    echo $nameError;
                                                                } ?> </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>User Type</label>
                                </td>
                                <td>
                                    <input type="text" name="type" placeholder="Enter your User Type" /><br><br>
                                    <span class="errorColor">* <?php if (isset($typeError)) {
                                                                    echo $typeError;
                                                                } ?> </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>User Address</label>
                                </td>
                                <td>
                                    <input type="text" name="address" placeholder="Enter your Address" /><br><br>
                                    <span class="errorColor">* <?php if (isset($addressError)) {
                                                                    echo $addressError;
                                                                } ?> </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Contact No</label>
                                </td>
                                <td>
                                    <input type="text" name="contactno" placeholder="Enter your Number" /><br><br>
                                    <span class="errorColor">* <?php if (isset($contactnoError)) {
                                                                    echo $contactnoError;
                                                                } ?> </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Email</label>
                                </td>
                                <td>
                                    <input type="text" name="email" placeholder="Enter your Email" /><br><br>
                                    <span class="errorColor">* <?php if (isset($emailError)) {
                                                                    echo $emailError;
                                                                } ?> </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Password</label>
                                </td>
                                <td>
                                    <input type="password" name="password" placeholder="Enter your Password" /><br><br>
                                    <span class="errorColor">* <?php if (isset($passwordError)) {
                                                                    echo $passwordError;
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
                            <tr>
                                <td colspan="2"><label name="status"> </label>
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