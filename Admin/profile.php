<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Profile - Greenland Farmers Assistant</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700' rel='stylesheet' type='text/css'>

  <!-- Stylesheets -->
  <link href="../style/mainstyle.css" rel="stylesheet">
  <!-- Font awesome icon -->
  <link rel="stylesheet" href="../style/font-awesome.css">
  <!-- Flex slider -->
  <link rel="stylesheet" href="../style/flexslider.css">
  <!-- prettyPhoto -->
  <link rel="stylesheet" href="../style/prettyPhoto.css">
  <!-- Main stylesheet -->
  <link href="../style/style.css" rel="stylesheet">

  <!-- Bootstrap responsive -->
  <link href="../style/responsive.css" rel="stylesheet">
  
  
  <link rel="shortcut icon" href="../img/favicon/favicon.png">
</head>

<body>
<? php session_start();
?>

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
        <ul class="nav pull-left">
          <li><a href="index.php" class="open br-green"><i class="icon-home"></i> Home</a></li>

        </ul>
          <ul class="nav pull-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
              <ul class="dropdown-menu">
                        <li><a href="profile.php">My Profile</a></li>
                         <li><a href="../logout.php">Logout</a></li>
             </ul>
            </li> 
          </ul>
        </div>
      </div>
    </div>
  </div>

<!-- Navbar ends -->


  

<!-- Main content starts -->

<div class="content">

  <!-- Sidebar starts -->
  <div class="sidebar">

    <!-- Logo -->
    <div class="logo">
      <a href="#"><img src="../img/b-logo.png" alt="" /></a>
    </div>



        <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

        <div class="s-content">

          <ul id="nav">
            <!-- Main menu with font awesome icon -->
             <li><a href="index.php" class="open br-green"><i class="icon-home"></i> Home</a>
              
            </li>
           <li class="has_sub"><a href="#" class="br-blue"><i class="icon-list-alt"></i>News<span class="pull-right"><i class="icon-chevron-right"></i></span></a>
            <ul>
             <li><a href="postNews.php">Post News</a></li>
             </li>
             </ul>

            <li class="has_sub"><a href="#" class="br-green"><i class="icon-user"></i>Users<span class="pull-right"><i class="icon-chevron-right"></i></span></a>
              <ul>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="viewFarmers.php">Farmers</a></li>
                <li><a href="viewSuppliers.php">Suppliers</a></li>
                <li><a href="viewUsers.php">All Users</a></li>
              </ul>
            </li> 
            <li><a href="viewComplaint.php" class="br-red"><i class="icon-envelope-alt"></i>View Complaints</a></li>
          
            <li><a href="viewContactus.php" class="br-red"><i class="icon-envelope-alt"></i>View Contact us</a></li>
          </ul>
            <!-- Sidebar search -->
    

            <form class="form-search s-widget">
              <div class="input-append">
                <input type="text" class="input-small search-query">
                <input type="submit" class="btn btn-danger" name="search" value="Search">
              </div>
            </form>

        </div>



  </div>
  <!-- Sidebar ends -->

  <!-- Mainbar starts -->
  <div class="mainbar">
    <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2>Profile</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="index.php">Home</a> <span class="divider">/</span></li>
          <li><a href="profile.php">Profile</a> <span class="divider">/</span></li>
         
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

      <div class="span4">

        <div class="well">
          <!-- Your details -->
          <div class="address">
            <address>
              

            <!-- Phone number -->
              <abbr title="Phone">P:</abbr> <? php $_SESSION['SESS_telNO'] = $r['telNo'];?><br />
              <a href="mailto:#"><? php $_SESSION['SESS_email'] = $r['email'];?></a>

            </address>
          </div>
        </div>

      </div>

      <div class="span8">
          <h5>Edit Profile</h5>
          <hr />
                            <div class="form">
                                      <!-- Edit profile form (not working)-->
                                      <form class="form-horizontal">
                                          <!-- Name -->
                                         
                                          <div class="control-group">
                                            <label class="control-label" for="user-name">User Name:</label>
                                            <div class="controls">
                                              <input type="text" class="input-large" name="username">
                                            </div>
                                          </div>
                                          <!-- Password -->
                                          <div class="control-group">
                                            <label class="control-label" for="email">Old Password</label>
                                            <div class="controls">
                                              <input type="password" class="input-large" name="oldpassword">
                                            </div>
                                          </div>
                                          <div class="control-group">
                                            <label class="control-label" for="email" > New Password</label>
                                            <div class="controls">
                                              <input type="password" class="input-large" name="newpassword">
                                            </div>
                                          </div>
                                          <div class="control-group">
                                            <label class="control-label" for="email">Confirm Password</label>
                                            <div class="controls">
                                              <input type="password" class="input-large" name="confirmpassword">
                                            </div>
                                          </div>
                                          <!-- Checkbox -->
                                          <div class="control-group">
                                             <div class="controls">
                                                <label class="checkbox inline">
                                                   <input type="checkbox" id="inlineCheckbox3" value="agree"> Agree with Terms and Conditions
                                                </label>
                                             </div>
                                          </div> 
                                          
                                          <!-- Buttons -->
                                          <div class="form-actions">
                                             <!-- Buttons -->
                                              <input type="submit" class="btn-success" name="update" value="Update"/>
                                            <input type="reset" class="btn-success"  name="reset" value="Reset"/>
                                          </div>
                                      </form>
                                    </div>
      </div>

          </div>
        </div>

        <!-- Content ends -->

      </div>
    </div>
                     

  </div>
  <!-- Mainbar ends -->
<div class="clearfix"></div>

</div>

<div class="clearfix"></div>

<!-- Main content ends -->


<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span> 

<!-- JS -->
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script> <!-- Bootstrap -->
<script src="../js/filter.js"></script> <!-- Filter JS -->
<script src="../js/jquery.carouFredSel-6.1.0-packed.js"></script> <!-- CarouFredSel -->
<script src="../js/jquery.flexslider-min.js"></script> <!-- Flexslider -->
<script src="../js/jquery.isotope.js"></script> <!-- Isotope -->
<script src="../js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->
<script src="../js/jquery.tweet.js"></script> <!-- Tweet -->
<script src="../js/custom.js"></script> <!-- Main js file -->
</body>
</html>