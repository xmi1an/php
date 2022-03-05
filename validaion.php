<html>

<head>
    <style>
        .errorColor {
            color: #D30000;
        }
    </style>
</head>

<body>

    <?php
    // all required variables defined here
    $nameError = $emailError = "";
    $name = $email = $message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameError = "Name is mandatory";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameError = "Only letters allowed";
            }
        }

        if (empty($_POST["email"])) {
            $emailError = "Email is mandatory";
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailError = "Invalid email format";
            }
        }

        if (empty($_POST["message"])) {
            $message = "";
        } else {
            $message = test_input($_POST["message"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2><u>PHP Form With Validation</u></h2>
    <p><span class="errorColor">* mandatory field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        Name: <input type="text" name="name">
        <span class="errorColor">* <?php echo $nameError; ?></span>
        <br><br>

        E-mail: <input type="text" name="email">
        <span class="errorColor">* <?php echo $emailError; ?></span>
        <br><br>

        Message: <textarea name="message" rows="6" cols="24"></textarea>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $message;
    ?>

</body>

</html>