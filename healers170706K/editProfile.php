<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="stylesheet\_bootswatch.SCSS">
    <link rel="stylesheet" href="stylesheet\_variables.SCSS">
    <link rel="stylesheet" href="stylesheet\bootstrap.CSS">
    <link rel="stylesheet" href="stylesheet\bootstrao.min.CSS">
    <link rel="stylesheet" href="stylesheet\style.CSS">
    <script src="js\password.js"></script>
</head>
<body> 
<div class='card mb-3 divpadding' id = 'passwordDiv' style= max-width: 20rem;>
<form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<div class='card-header'><h4>Change Password</h4><br></div>
</tr>
<tr>
<td width="40%"><label>Current Password</label></td>
<td width="60%"><input type="password" name="currentPassword" class="txtField"/><span id="currentPassword"  class="required"></span></td>
</tr>
<tr>
<td><label>New Password</label></td>
<td><input type="password" name="newPassword" class="txtField"/><span id="newPassword" class="required"></span></td>
</tr>
<td><label>Confirm Password</label></td>
<td><input type="password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></span></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</div>

    </body>
<?php
session_start();
$_SESSION["userId"] = $_GET['ID'];
$conn = mysqli_connect("localhost", "root", "", "healersdb") or die("Connection Error: " . mysqli_error($conn));

if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT *from counsellors WHERE CounsellorID='" . $_SESSION["userId"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["currentPassword"] == $row["Password"]) {
        mysqli_query($conn, "UPDATE counsellors set password='" . $_POST["newPassword"] . "' WHERE CounsellorID='" . $_SESSION["userId"] . "'");
        $message = "Password Changed";
        header("Location: https://localhost/healers170706K/log1.html");

    } else
        $message = "Current Password is not correct";
}
?>
</html>