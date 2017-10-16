<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Complaints- Grenland Farmers Assistant</title>
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
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="../img/favicon/favicon.png">
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


<!-- Sliding box starts -->
   <div class="slide-box">
      <div class="bor"></div>
      <div class="padd">
        <div class="slide-box-button">
          <i class="icon-chevron-left"></i>
        </div>
        <h5>Welcome</h5>
        Lorem ipsum dolor sit amet, constur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.

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

  <!-- Sidebar starts -->
  <div class="sidebar">

    <!-- Logo -->
    <div class="logo">
      <a href="#"><img src="../img/b-logo.png" alt="" /></a>
    </div>



        <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->

        <!-- Colors: Add the class "br-red" or "br-blue" or "br-green" or "br-orange" or "br-purple" or "br-yellow" to anchor tags to create colorful left border -->
        <div class="s-content">

          <ul id="nav">
            
            <!-- Main menu with font awesome icon -->
            <li><a href="index.php" class="open br-green"><i class="icon-home"></i> Home</a>
              
            </li>
           <li class="has_sub"><a href="#" class="br-blue"><i class="icon-list-alt"></i> Post News<span class="pull-right"></span></a>
           <ul>
             <li><a href="postNews.php">Post News</a></li>
             </ul>
            </li>  

            <li class="has_sub"><a href="#" class="br-green"><i class="icon-user"></i>Users<span class="pull-right"><i class="icon-chevron-right"></i></span></a>
              <ul>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="viewFarmers.php">Farmers</a></li>
                <li><a href="viewSuppliers.php">Suppliers</a></li>
                <li><a href="viewUsers.php">All Users</a></li>
              </ul>
            </li> 
            <li><a href="viewComplaints.php" class="br-red"><i class="icon-envelope-alt"></i>Complaints</a></li>
          
            <li><a href="viewContactus.php" class="br-red"><i class="icon-envelope-alt"></i> Contact</a></li>
          </ul>


            <!-- Sidebar search -->
    

            <form class="form-search s-widget">
              <div class="input-append">
                <input type="text" class="input-small search-query">
                <button type="submit" class="btn btn-danger">Search</button>
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
          <h2>Farmers Complaints</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">Home</a> <span class="divider">/</span></li>
          <li><a href="#">Admin</a> <span class="divider">/</span></li>
          <li class="active">View Complains</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class="span12">

              <table class="table table-striped table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>ComplainID</th>
                          <th>Subject</th>
                          <th>Message</th>
                          <th>Email</th>
                          <th>Status</th>
                          <th>Control</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php
			$db=mysqli_connect("localhost","root","","greenland");
			$result =mysqli_query($db,"SELECT * FROM complainPage ");
      while( $row = mysqli_fetch_array($result) )
			
						{
							echo '<tr>';
							echo '<td  style="border-left">'.$row['complain_id'].'</td>';
							echo '<td  style="border-left">'.$row['complain-subject'].'</td>';
							echo '<td><div align="left">'.$row['complain-message'].'</div></td>';
							echo '<td><div align="left">'.$row['email'].'</div></td>';
							echo '<td><div align="center"><button class="btn btn-mini btn-success"><i class="icon-ok"></i> </button></div></td>';
							echo '<td><div align="center"><button class="btn btn-mini btn-danger"><i class="icon-remove"></i></button></div></td>';
							echo '</tr>';
						}
					?>
                      </tbody>
                    </table>
                    
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