<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	session_start();

	$cn = mysqli_connect("localhost", "root", "", "dharmi") or die("connection not established");
	$ut = $_REQUEST["type"];
	$em = $_REQUEST["email"];
	$pw = $_REQUEST["password"];


	if (isset($_REQUEST["btnlogin"])) {

		// Valication for Email
		if (empty($_POST["email"])) {
			$emailError = "Email is mandatory";
		} else {
			// check if e-mail address is well-formed
			if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
				$emailError = "Invalid email format";
			}
		}

		// Validation for Password
		if (empty($_POST["password"])) {
			$passwordError = "Password is mandatory";
		} else {
			if (strlen($pw) < 8) {
				$passwordError = "Password must be atleast 8 characters";
			} else {
				$sel = "select * from registration where utype='$ut' and email='$em' and upassword='$pw'";
				$t = mysqli_query($cn, $sel);
				$r = mysqli_fetch_array($t);
				//echo "$r[0] <br> $r[1] <br> $r[2]";
				if (isset($r)) {
					//echo "utype=$r[0]</br> email=$r[1]</br> password=$r[2]";
					//echo"<script language'javascript'>alert('Welcome');</script>";
					$_SESSION["unm"] = $em;
					$_SESSION["utype"] = $ut;
					header("location: home.php");
				} else {
					if ($r == 0) {
						echo "<script language'javascript'>alert('Invalid email or password');</script>";
					}
				}
			}
		}
	}
	mysqli_close($cn);
}

?>

<html>

<head>
	<title> Login </title>
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

				<form name="form1" method="post">

					<table class="table table-bordered">
						<tr>
							<td colspan="2">
								<h2> Login </h2>
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
								<label>Email</label>
							</td>
							<td>
								<input type="text" name="email" placeholder="Enter your Email" />
								<span class="errorColor">* <?php if (isset($emailError)) {
																echo $emailError;
															} ?></span>
								<br><br>
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
															} ?></span>
							</td>
						</tr>
						<tr>
							<td>
								<button type="reset" name="btnreset"> Reset </button>
							</td>
							<td>
								<button type="submit" name="btnlogin"> Login </button>
							</td>
						</tr>
					</table>
				</form>
			</div>
			<div class="col-2">
			</div>
		</div>
	</div>

	<?php include("footer.php");
	?>
</body>

</html>