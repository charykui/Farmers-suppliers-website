
<? php 
$db=mysqli_connect("localhost","root","","greenland");
if(isset($_POST['submit'])) {
  	
  	$topic =$_POST['complaint_topic'];
	$message = $_POST['complaint_message'];
	$email  =$_POST['email'];
	 $stmt=mysqli_query($db,"insert into complaints
          VALUES ('','$topic','$message ','$email')") or die(mysqli_connect_error());
	if ($stmt) {
              ?>
              <script>
                  alert('successfully submitted');
              </script >
              <? php
            }
     else {
        ?>
        <script>
            alert('error while submitting');
        </script >
        <? php
    }
}
?>