<?php
include "DBconnect.php";
if(isset($_POST['register'])) {
  $db=mysqli_connect("localhost","root","","greenland");
    //$username = !empty($_POST['username']) ? trim($_POST['username']) : null;
	$firstname =$_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username =$_POST['username'];
	$email  =$_POST['email'];
	$address = $_POST['address'];
	$telNo = $_POST['telNo'];
	$position = $_POST['position'];
	$confirm_pass =$_POST['confirm-password'];
	$password = md5($_POST['password']);
	
    
	//check if there an existing account with same username
	
	$stmt=mysqli_query($db, "SELECT *FROM users WHERE username ='$username'");
	//$stmt->bindvalue(' :username',$username);
	//$stmt->execute();
	//$row = $stmt->fetch(PDO::FETCH_ASSOC);
  $n=mysqli_num_rows($stmt);

	if($n > 0){
        echo('That username already exists!');
    }
	
	else{
	
    $stmt=mysqli_query($db,"insert into users
          VALUES ('',$firstname','$lastname','$username','$email','$address','$telNo','$position','$password')");
   
    if ($stmt) {
        ?>
        <script >
            alert('successfully registered');
            <?php
            header('location:login.php');
            ?>
        </script >
        <?php
    }
    else {
        ?>
        <script >
            alert('error while registering');
        </script >
        <?php
    }
	}
}
?>
