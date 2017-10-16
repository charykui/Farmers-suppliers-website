
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Greenland</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="charity">

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


<!-- Sliding box starts -->
   <div class="slide-box">
      <div class="bor"></div>
      <div class="padd">
        <div class="slide-box-button">
          <i class="icon-chevron-left"></i>
        </div>
        <h5>Welcome to Greenland Farmers Assistant.</h5>
        Farmer Choice,Farmer Happiness
    

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

        <div class="s-content">

          <ul id="nav">
            <!-- Main menu with font awesome icon -->
           
      <li><a href="index.php" class="open br-green"><i class="icon-home"></i> Home</a></li>
              
       <li class="has_sub"><a href="#" class="br-blue"><i class="icon-list-alt"></i> Farmers Pages<span class="pull-right"><i class="icon-chevron-right"></i></span></a>
              <ul>
               <li><a href="profile.html">Profile</a></li>
                <li><a href="complaintsPage.php">Forward complaints</a></li>
                <li><a href="offers.php"> View Offers</a></li>
              </ul>
            </li> 
             <li class="has_sub"><a href="#" class="br-green"><i class="icon-list-alt"></i> Pages #2  <span class="pull-right"><i class="icon-chevron-right"></i></span></a>
              <ul>
                <li><a href="newsPage.php">News Page</a></li>
                <li><a href="forumPage.php">Forum Page</a></li>

              </ul>
            </li>   
            <li><a href="aboutus.php" class="br-purple"><i class="icon-user"></i> About Us</a></li>
            <li><a href="contactus.php" class="br-red"><i class="icon-envelope-alt"></i> Contact Us</a></li>
          </ul>

            <!-- Sidebar search -->
    

            <form class="form-search s-widget">
              <div class="input-append">
                <input type="text" class="input-small search-query">
                <button type="submit" class="btn btn-danger" name="search">Search</button>
              </div>
            </form>

        </div>



  </div>
  <!-- Sidebar ends -->

  <!-- Mainbar starts -->
  <div class="mainbar">

    <!-- Contact box starts -->

    <div class="cslider-box">
      <div class="cslider">
         <div class="container-fluid">
            <div class="row-fluid">
              <div class="span6">

                <div class="box-body">
                  <h6>About US</h6>
                  <hr />
                  <p><img src="../img/charity.jpg" alt="" width="150" class="alignleft"/>A Website to help farmers ensure greater profitability through direct farmer to supplier and farmer to farmer communication.
                  This service boosts business communication and brings transparency in the system.
                  This innovative site allows for good farmer, retailer and supplier communication. 
                  </p>
                  <div class="clearfix"></div>
                 <hr />

                <div class="social">
                  <a href="#"><i class="icon-facebook facebook"></i></a>
                  <a href="#"><i class="icon-twitter twitter"></i></a>
                  <a href="#"><i class="icon-linkedin linkedin"></i></a>
                  <a href="#"><i class="icon-google-plus google-plus"></i></a>
                  <a href="#"><i class="icon-pinterest pinterest"></i></a>
                </div>

                 <hr />
                 <div class="address">
                    <div class="row-fluid">
                       <div class="span6">
                          <address>
                            <span class="bold"><i class="icon-home"></i> Greenland Farmers Assistant.</span><br>
                            Moi Avenue Street,Farmers plaza,2ND Floor<br>
                            Eldoret, Kenya.<br>
                          </address>
                       </div>
                       <div class="span6">
                          <address>
                            <i class="icon-user"></i> <span class="bold">C</span>Charity Kui<br>
                            <i class="icon-envelope-alt"></i> <a href="mailto:#">charycharice@gmail.com</a><br>
                            <i class="icon-signal"></i> <abbr title="Phone">P:</abbr>+2547 11752270
                          </address>
                       </div>
                    </div>
                 </div>

                </div>  

              </div>
              <div class="span6">

                <div class="box-body">
                  
                 <h6>Contact Us</h6>
                  <hr />
                  <div class="form">
                   <form class="form-horizontal">
                       <div class="control-group">
                         <label class="control-label" for="name">Name</label>
                         <div class="controls">
                           <input type="text" class="input-large" name="name">
                         </div>
                       </div>
                       <div class="control-group">
                         <label class="control-label" for="email">Email</label>
                         <div class="controls">
                           <input type="text" class="input-large" name="email">
                         </div>
                       </div>
                       <div class="control-group">
                         <label class="control-label" for="comment">Comment</label>
                         <div class="controls">
                           <textarea class="input-xlarge" name="comment" rows="4"></textarea>
                         </div>
                       </div>
                       <div class="form-actions">
                         <button type="submit" class="btn btn-danger" name="submit" value="Submit"/>
                         <button type="reset" class="btn" name="reset" value="Reset"/>
                       </div>
                   </form>
                 </div>
                </div> 

              </div>
            </div>
         </div>
      </div>
      <div class="cslider-btn"><i class="icon-angle-down"></i></div>
    </div>

    <!-- Contact box ends -->


    <div class="matter">
      <div class="container-fluid">
        <div class="row-fluid">

          <div class="span12">

            <!-- Sheet starts -->
              <div class="box-body">
                <div class="ysheet">
                  <div class="bor"></div>
                   <div class="ysheet1">
                      <? php if($_SESSION["user_id"])?>  Title -->
                      <h3>hello  <? php echo $_SESSION['user_id'] = $r['username'];?></h3>
                      <!-- Para -->
                      <p>At your service.Feel free to use our service</p>
                   </div>
                   <div class="ysheet2"></div>
                   <div class="ysheet3"></div>
                </div>
              </div>

            <!-- Sheet ends -->


            <!-- Slider (Flex Slider) -->
            
                <div class="box-body">
                  <div class="flexslider">
                    <ul class="slides">
                        <!-- Each slide should be enclosed inside li tag. -->
                        
                        <!-- Slide #1 -->
                      <li>
                        <!-- Image -->
                        <img src="../img/photos/1.jpg" alt=""/>
                        <!-- Caption -->
                        <div class="flex-caption">
                          <div class="bor"></div>
                           <!-- Title -->
                           <h3>WELCOME to our Site</h3>
                           <!-- Para -->
                           <p>Let us Assist you to conquer your farming problems and make worth of your visit </p>
                        </div>
                      </li>
                      
                        <!-- Slide #2 -->
                      <li>
                        <img src="../img/photos/2.jpg" alt=""/>
                        <div class="flex-caption">
                          <div class="bor"></div>
                           <h3>Register with us</h3>
                           <p>You will have full access to our services </p>
                        </div>                  
                      </li>
                      
                      <li>
                        <img src="../img/photos/3.jpg" alt=""/>
                        <div class="flex-caption">
                          <div class="bor"></div>
                           <h3>Who are our client?</h3>
                           <p>We give our services to both Farmers and Suppliers.Specify these positions during your registration </p>
                        </div>                  
                      </li>
                    </ul>
                  </div>
                </div>
              
              <!-- Slider ends -->

          </div>          
        </div>

              <hr />
      </div>
    </div>

  </div>
  <!-- Mainbar ends -->
<div class="clearfix"></div>
  <!-- Foot starts -->             
    <div class="foot">
    <div class="bor"></div>
      <div class="container-fluid">
        
    
    <div class="row-fluid">
      <div class="span12">
        <hr class="visible-desktop">
        <div class="copy">Copyright 2016 &copy; Greenland Farmers Assistant</div>
      </div>
    </div>
    
      </div>
    </div> 
  <!-- Foot ends -->

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