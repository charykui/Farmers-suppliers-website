<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Register - Greenland Farmers Assistant</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700' rel='stylesheet' type='text/css'>

  <!-- Stylesheets -->
  <link href="style/bootstrap.css" rel="stylesheet">
  <!-- Font awesome icon -->
  <link rel="stylesheet" href="style/font-awesome.css"> 
  <!-- Flex slider -->
  <link rel="stylesheet" href="style/flexslider.css">
  <!-- prettyPhoto -->
  <link rel="stylesheet" href="style/prettyPhoto.css">
  <!-- Main stylesheet -->
  <link href="style/style.css" rel="stylesheet">

  <!-- Bootstrap responsive -->
  <link href="style/bootstrap-responsive.css" rel="stylesheet">
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon/favicon.png">
</head>

<body>

<!-- Navbar starts -->

  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container-fluid">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div class="nav-collapse collapse">
		<ul class="nav pull-letf">
		<li><a href="index.html"><i class="icon-home"></i> Home</a></li></ul>
          <ul class="nav pull-right">
            <li><a href="loginform.php">Login</a></li>
            <li><a href="registerform.php">Register</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
              <ul class="dropdown-menu">
                          <li><a href="login.php">Logout</a></li>
             </ul>
            </li> 

             
          </ul>
        </div>
      </div>
    </div>
  </div>

<!-- Navbar ends -->


<!-- Sliding box starts -->
   <div class="slide-box">
      <div class="bor"></div>
      <div class="padd">
        <div class="slide-box-button">
          <i class="icon-chevron-left"></i>
        </div>
        <h5>Welcome  to Greenland Farmers Assistant</h5>
        Farmers Choice Farmers Happiness

        <hr />

        <div class="social">
          <a href="#"><i class="icon-facebook facebook"></i></a>
          <a href="#"><i class="icon-twitter twitter"></i></a>
          <a href="#"><i class="icon-linkedin linkedin"></i></a>
          <a href="#"><i class="icon-google-plus google-plus"></i></a>
          <a href="#"><i class="icon-pinterest pinterest"></i></a>
        </div>
      
      </div>
    </div>

<!-- Sliding box ends -->    

<!-- Main content starts -->

<div class="content">

  <div class="container-fluid">
    <div class="row-fluid">

      <div class="span12">  

                   <div class="well login-register">
                   
                   <h5>Register</h5>
                   <hr />

                    <div class="form" >
                                      <!-- Register form (not working)-->
                                      <form class="form-horizontal" action="" method="post">
                                          <!-- First Name -->
                                          <div class="control-group">
                                            <label class="control-label" for="first-name">First Name:</label>
                                            <div class="controls">
                                              <input type="text" class="input-large" name="firstname">
                                            </div>
                                          </div> 
										  <!--  Last Name -->
                                          <div class="control-group">
                                            <label class="control-label" for="last-name">Last Name:</label>
                                            <div class="controls">
                                              <input type="text" class="input-large" name="lastname">
                                            </div>
                                          </div>
										  <!-- User Name -->
                                          <div class="control-group">
                                            <label class="control-label" for="user-name">User Name:</label>
                                            <div class="controls">
                                              <input type="text" class="input-large" name="username">
                                            </div>
                                          </div>
                                          <!-- Email -->
                                          <div class="control-group">
                                            <label class="control-label" for="email">Email:</label>
                                            <div class="controls">
                                              <input type="text" class="input-large" name="email" placeholder="email@mail.com">
                                            </div>
                                          </div>
										  <!-- Phone number -->
                                          <div class="control-group">
                                            <label class="control-label" for="telNo">Telephone No:</label>
                                            <div class="controls">
                                              <input type="text" class="input-large" name="telNo">
                                            </div>
                                          </div>

                                          <div class="control-group">
                                            <label class="control-label" for="address">Address:</label>
                                            <div class="controls">
                                              <input type="text" class="input-large" name="address">
                                            </div>
                                          </div>
                                          <!-- Select box -->
                                          <div class="control-group">
                                            <label class="control-label" for="select">Position:</label>
                                            <div class="controls" name="position">                               
                                                <select name="position">
                                                <option>&nbsp;</option>
                                                <option>Farmer</option>
                                                <option>Supplier</option>
												</select>
                                            </div>
                                          </div>                                           
                                          
                                          <!-- Password -->
                                          <div class="control-group">
                                            <label class="control-label" for="email">Password</label>
                                            <div class="controls">
                                              <input type="password" class="input-large" name="password">
                                            </div>
                                          </div>
										  <!-- Cornfirm Password -->
                                         <!-- <div class="control-group">
                                            <label class="control-label" for="email">Confirm Password</label>
                                            <div class="controls">
                                              <input type="password" class="input-large" name="confirmpassword">
                                            </div>
                                          </div>
                                          <!-- Checkbox -->
                                          <div class="control-group">
                                             <div class="controls">
                                                <label class="checkbox inline">
                                                   <input type="checkbox" id="inlineCheckbox1" value="agree"> Agree with Terms and Conditions
                                                </label>
                                             </div>
                                          </div> 
                                          
                                          <!-- Buttons -->
                                          <div class="form-actions">
                                             <!-- Buttons -->
                                            <input type="submit" class="btn-success" name="register" value="Register"/>
                                            <input type="reset" class="btn-success"  name="reset" value="Reset"/>
                                          </div>
                                      </form>
                                             Already have an Account? <a href="loginform.php">Login</a>
                                    </div> 
                                  </div>

                   </div>

      </div>

    </div>
  </div>

</div>

<div class="clearfix"></div>

<!-- Main content ends -->
	
<!-- Footer -->
<footer>
            <div class="bor"></div>
            <p>Copyright &copy; <a href="#">Greenland Farmers Assistant</a> - Designed by Charity</a></p>
      
</footer>		

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span> 

<!-- JS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script> <!-- Bootstrap -->
<script src="js/filter.js"></script> <!-- Filter JS -->
<script src="js/jquery.carouFredSel-6.1.0-packed.js"></script> <!-- CarouFredSel -->
<script src="js/jquery.flexslider-min.js"></script> <!-- Flexslider -->
<script src="js/jquery.isotope.js"></script> <!-- Isotope -->
<script src="js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->
<script src="js/jquery.tweet.js"></script> <!-- Tweet -->
<script src="js/custom.js"></script> <!-- Main js file -->

<?php
//include "DBconnect.php";
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
 // $confirm_pass =$_POST['confir-password'];
  $password = md5($_POST['password']);
  
    
  //check if there an existing account with same username
  
  $stmt=mysqli_query($db, "SELECT * FROM users WHERE username ='$username'");
  //$stmt->bindvalue(' :username',$username);
  //$stmt->execute();
  //$row = $stmt->fetch(PDO::FETCH_ASSOC);
  $n=mysqli_num_rows($stmt);

 // if($n > 0){
       // echo('That username already exists!');
    //  } 
  //else{
  
        $stmt2=mysqli_query($db,"insert into users
                VALUES ('','$firstname','$lastname','$username','$email','$address','$password','$telNo','$position')") or die(mysqli_connect_error());

         
          if ($stmt2) {
              ?>
              <script>
                  alert('successfully registered');
              </script >
              <?php
              header('location:loginform.php');
            }else {
        ?>
        <script>
            alert('error while registering');
        </script >
        <?php
    }
 // }
}
?>
</body>
</html>

