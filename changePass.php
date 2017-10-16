<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
currentPassword.focus();
document.getElementById("currentPassword").innerHTML = "required";
output = false;
}
else if(!newPassword.value) {
newPassword.focus();
document.getElementById("newPassword").innerHTML = "required";
output = false;
}
else if(!confirmPassword.value) {
confirmPassword.focus();
document.getElementById("confirmPassword").innerHTML = "required";
output = false;
}
if(newPassword.value != confirmPassword.value) {
newPassword.value="";
confirmPassword.value="";
newPassword.focus();
document.getElementById("confirmPassword").innerHTML = "not same";
output = false;
} 	
return output;
}
</script>
<?php
$_SESSION["userId"] = "24";
$conn = mysql_connect("localhost","root","");
mysql_select_db("phppot_examples",$conn);
if(count($_POST)>0) {
$result = mysql_query("SELECT *from users WHERE userId='" . $_SESSION["userId"] . "'");
$row=mysql_fetch_array($result);
if($_POST["currentPassword"] == $row["password"]) {
mysql_query("UPDATE users set password='" . $_POST["newPassword"] . "' WHERE userId='" . $_SESSION["userId"] . "'");
$message = "Password Changed";
} else $message = "Current Password is not correct";
}
?>