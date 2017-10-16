<? php
//include "DBconnect.php";
if(isset($_POST['submit'])) {
	
$db=mysqli_connect("localhost","root","","greenland");
$offers_name=$_POST['offers_name'];
$quantity= $_POST['quantity'];
$description= $_POST['description'];
// $date= $_POST['date'];
 $offer_type= $_POST['offer_type'];
 
 $stmt=mysqli_query($db,"insert into offer
          VALUES ('',$offers_name','$quantity','$description','$offer_type')") or die(mysqli_connect_error());


  if ($stmt) {
        ?>
        <script >
            alert('successfully registered');
           
        </script >

         <? php

            header('location:offers.php');
            
            }

 else{
        ?>
        <script >
            alert('error while registering');
        </script >
        <? php
    }
}
