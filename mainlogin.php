<?php
//include 'DBconnect.php';
$db=mysqli_connect("localhost","root","","greenland");
//$conn->connect_to_db();
if (isset($_POST['login']) )
{
    $username= $_POST['username'];
    $password = md5($_POST['password']);
    $value = $_POST['position'];
    /*  echo $value;
      echo $user;
      echo $password;
      exit();*/
    if ($value == 'Supplier') 
	{

         $stmt =mysqli_query($db,"SELECT * FROM users WHERE username='$username' and password= '$password'");
        
    $rows = mysqli_num_rows($stmt);
     while($r=mysqli_fetch_array($stmt))
     {
            //Successful login
           // $supplier = mysqli_fetch_array($query);
            session_start();
            $_SESSION['user_id'] = $r['username'];
            $_SESSION['SESS_firstname'] = $r['firstname'];
            $_SESSION['SESS_lastname'] = $r['lastname'];
            $_SESSION['SESS_email'] = $r['email'];
            $_SESSION['SESS_telNO'] = $r['telNo'];
            $_SESSION['SESS_position'] = $r['position'];
             $_SESSION['SESS_address'] = $r['address'];
		      	header('location:Supplier/index.php');
            
         } 
	}
    elseif ($value == 'Farmer') 
	{
       
         $stmt =mysqli_query($db,"SELECT * FROM users WHERE username='$username' and password= '$password'");
        
    $rows = mysqli_num_rows($stmt);
     while($r=mysqli_fetch_array($stmt))
     {
            //Successful login
           // $supplier = mysqli_fetch_array($query);
            session_start();
            $_SESSION['user_id'] = $r['username'];
			header('location:Farmer/index.php');
            
         } 
	}
    elseif($value=='Admin')
	{
         $stmt =mysqli_query($db,"SELECT * FROM users WHERE username='$username' and password= '$password'");
        
    $rows = mysqli_num_rows($stmt);
     while($r=mysqli_fetch_array($stmt))
     {
            //Successful login
           // $supplier = mysqli_fetch_array($query);
            session_start();
            $_SESSION['user_id'] = $r['username'];
			header('location:Admin/index.php');
            
         } 
    }
	else{
//Unsuccessful
    echo" Unsuccessful";
        header('location:loginform.php');
//end ofline
        
        //exit();
        }
       

   
        

}
