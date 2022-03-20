<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cn = mysqli_connect("localhost", "root", "", "test") or die("connection not established");
    $nm = $_REQUEST["name"];
    $ut = $_REQUEST["type"];
    $ua = $_REQUEST["address"];
    $ctn = $_REQUEST["contactno"];
    $em = $_REQUEST["email"];
    $pw = $_REQUEST["password"];

    // Validation for name
    if (empty($nm)) {
        $nameError = "Name is mandatory";
    } else {
        if (!preg_match("/^[a-zA-Z ]*$/", $nm)) {
            $nameError2 = "Only letters and white space allowed";
        }
    }

    // Validation for address
    if (empty($ua)) {
        $addressError = "Address is mandatory";
    } else {
        if (!preg_match("/^[a-zA-Z, ]*$/", $ua)) {
            $addressError2 = "Only letters and white space and ',' allowed";
        }
    }

    // Validation for contactno
    if (empty($ctn)) {
        $contactnoError = "Contact no is mandatory";
    } else {
        if (!preg_match("/^[0-9]*$/", $ctn)) {
            $contactnoError2 = "Only numbers allowed";
        }
    }

    // Validation for email
    if (empty($em)) {
        $emailError = "Email is mandatory";
    } else {
        if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
            $emailError2 = "Invalid email format";
        }
    }
    // Validation for password
    if (empty($pw)) {
        $passwordError = "Password is mandatory";
    } else {
        $uppercase = preg_match('@[A-Z]@', $pw);
        $lowercase = preg_match('@[a-z]@', $pw);
        $number    = preg_match('@[0-9]@', $pw);
        $specialChars = preg_match('@[^\w]@', $pw);

        if (isset($uppercase, $lowercase, $number, $specialChars)) {
            if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pw) < 8) {
                $passwordError2 = "Password should be at least 8 characters in length and should include at least <br>one upper case letter, one number, and one special character.";
            }
        } else {
            $ins = "insert into registration(uname,utype,uaddress,ucontact_no,email,upassword) values('$nm','$ut','$ua','$ctn','$em','$pw')";
            $check = mysqli_query($cn, $ins);
            if ($check) {
                $_SESSION["unm"] = $em;
                $_SESSION["utype"] = $ut;
                echo "<script language'javascript'> alert('Registration Successful! Now you can Login !'); window.location.href = 'login.php';</script>";
            } else {
                mysqli_error($cn);
            }
        }
    }
    mysqli_close($cn);
}
?>

<html>

<head>
    <title> Reg </title>
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
                                    <input type="text" name="name" placeholder="Enter your Name" />
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
                                    <label class="label">User Type</label>
                                </td>
                                <td>
                                    <div class="field">
                                        <div class="control has-icons-left">
                                            <div class="select is-small">
                                                <select name="type" required>
                                                    <option selected value="buyer">Buyer</option>
                                                    <option value="admin">Admin</option>
                                                    <option value="seller">Seller</option>
                                                </select>

                                            </div>
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-globe"></i>
                                            </span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>User Address</label>
                                </td>
                                <td>
                                    <input type="text" name="address" placeholder="Enter your Address" />
                                    <span class="errorColor">* <?php if (isset($addressError)) {
                                                                    echo $addressError;
                                                                } ?> <span>
                                            <span class="errorColor"><?php if (isset($addressError2)) {
                                                                            echo $addressError2;
                                                                        } ?> </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Contact No</label>
                                </td>
                                <td>
                                    <input type="text" name="contactno" placeholder="Enter your Number" />
                                    <span class="errorColor">* <?php if (isset($contactnoError)) {
                                                                    echo $contactnoError;
                                                                } ?> <span>
                                            <span class="errorColor"><?php if (isset($contactnoError2)) {
                                                                            echo $contactnoError2;
                                                                        } ?> </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Email</label>
                                </td>
                                <td>
                                    <input type="text" name="email" placeholder="Enter your Email" />
                                    <span class="errorColor">* <?php if (isset($emailError)) {
                                                                    echo $emailError;
                                                                } ?> </span>
                                    <span class="errorColor"><?php if (isset($emailError2)) {
                                                                    echo $emailError2;
                                                                } ?> </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Password</label>
                                </td>
                                <td>
                                    <input type="password" name="password" placeholder="Enter your Password" />
                                    <span class="errorColor">* <?php if (isset($passwordError)) {
                                                                    echo $passwordError;
                                                                } ?> </span>
                                    <span class="errorColor"> <?php if (isset($passwordError2)) {
                                                                    echo $passwordError2;
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