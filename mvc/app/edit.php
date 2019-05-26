<?php

session_start();
$_SESSION["userId"] = "170007T";

$conn = mysqli_connect("localhost", "root", "") or die("Connection Error: " . mysqli_error($conn));


mysqli_select_db($conn,'project');

if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT *from student_data WHERE studentID='" . $_SESSION["userId"] . "'");
    $row = mysqli_fetch_array($result);


    if ($_POST["currentPassword"] == $row["Password"]) {
        mysqli_query($conn, "UPDATE student_data set Password='" . $_POST["newPassword"] . "' WHERE studentID='" . $_SESSION["userId"] . "'");
        /*mysqli_query($conn, "UPDATE student_data set email='" . $_POST["newEmail"] . "' WHERE studentID='" . $_SESSION["userId"] . "'");
        mysqli_query($conn, "UPDATE student_data set faculty='" . $_POST["newFaculty"] . "' WHERE studentID='" . $_SESSION["userId"] . "'");
        mysqli_query($conn, "UPDATE student_data set department='" . $_POST["newDepartment"] . "' WHERE studentID='" . $_SESSION["userId"] . "'");
        mysqli_query($conn, "UPDATE student_data set batch='" . $_POST["newBatch"] . "' WHERE studentID='" . $_SESSION["userId"] . "'");*/

        $message = "Changing done successfully";

        header("Location: https://localhost/student%20profile/html/profile.html");


    } else
        $message = "Current Password is not correct";
        echo '<div class="alert alert-dismissible alert-warning">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4 class="alert-heading">Warning!</h4>
  <p class="mb-0">Best check yo self, you\'re not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.</p>
</div>';


}
?>

<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" type="text/css" href="../css/edit.css" />
<!--<link rel="stylesheet"  href="../js/styles.css" />-->
<script src="../js/edit.js"></script>

</head>
<body>
    <form name="frmChange" method="post" action=""
        onSubmit="return validatePassword()">
        <div style="width: 500px;">
            <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
            <br>
            <table border="0" cellpadding="10" cellspacing="0"
                width="500" align="center" class="tblSaveForm">
                <tr class="tableheader">
                    <td colspan="2">Change Password</td>
                </tr>
                <tr>
                    <td width="40%"><label>Current Password</label></td>
                    <td width="60%"><input type="password"
                        name="currentPassword" class="txtField" /><span
                        id="currentPassword" class="required"></span></td>
                </tr>
                <tr>
                    <td><label>New Password</label></td>
                    <td><input type="password" name="newPassword"
                        class="txtField" /><span id="newPassword"
                        class="required"></span></td>
                </tr>
                <td><label>Confirm Password</label></td>
                <td><input type="password" name="confirmPassword"
                    class="txtField" /><span id="confirmPassword"
                    class="required"></span></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit"
                        value="Submit" class="btnSubmit"></td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>
