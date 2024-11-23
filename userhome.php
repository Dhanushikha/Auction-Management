<?php
session_start();
include("dbconnect.php");
extract($_POST);
$uname=$_SESSION['uname'];

$q1=mysqli_query($connect,"select * from tt_customer where uname='$uname'");
$r1=mysqli_fetch_array($q1);
if(isset($btn))
{
    $uploadDir = "product/";
$file = $uploadDir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $file)) {
    echo "";
} else {
    echo "";
}
$mq=mysqli_query($connect,"select max(id) from tt_product");
$mr=mysqli_fetch_array($mq);
$id=$mr['max(id)']+1;

$qry=mysqli_query($connect,"insert into tt_product(id,uname,category,itemname,description,startingprice,expectedprice,endtime,file,post_st,bidder,amount,order_date,commission,net_amount) values($id,'$uname','$category','$itemname','$description','$startingprice','$expectedprice','$endtime','$file','0','','0','','0','0')");
	if($qry)
	{
	?>
	<script language="javascript">
	alert("Product Added");
	window.location.href="view_design.php";
	</script>
	<?php
	}
	else
	{
	?>
	<script language="javascript">
	alert("Already Exist!");
	</script>
	<?php
	}
}

?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php include("title.php"); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<style>
.contact-section {
    padding: 50px 0;
}

.contact-title {
    text-align: center;
    margin-bottom: 50px;
}

.panel-heading h4 {
    margin-top: 0;
}

.panel-body {
    padding: 20px;
}

.btn-submit {
    margin-top: 20px;
}

/* Custom styling for form fields */
.form-group {
    margin-bottom: 20px;
}

/* Style for labels */
.form-control-label {
    font-weight: bold;
}

/* Style for input fields */
.form-control {
    border-radius: 0;
}

/* Style for submit button */
.btn-submit {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-submit:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

/* Responsive styles */
@media (max-width: 768px) {
    .panel-heading h4 {
        font-size: 18px;
    }
}

@media (max-width: 576px) {
    .contact-title {
        font-size: 24px;
    }
}
</style>

</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header_area">
            <div class="main-header">
             <div class="header-bottom header-sticky">
                <!-- Logo -->
                <div class="logo">
                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                </div>
                <div class="header-left  d-flex f-right align-items-center">
                    <!-- Main-menu -->
                    <div class="main-menu f-right d-none d-lg-block">
                        <nav> 
                            <ul id="navigation">                                                                                                                                     
                                <li><a href="userhome.php">Home</a></li>
                                <li><a href="view_design.php">Products</a></li>
                                <li><a href="view_bid.php">Bidding</a></li>
								
								<li><a href="logout.php">Logout</a></li>
                                <!--<li><a href="blog.html">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog_details.html">Blog Details</a></li>
                                        <li><a href="elements.html">Elements</a></li>
                                    </ul>
                                </li>-->
                                
                            </ul>
                        </nav>
                    </div>
                    <!-- left Btn -->
                   <!-- <div class="header-right-btn f-right d-none d-lg-block  ml-30">
                        <a href="login_admin.php" class="header-btn">Admin</a>
                    </div>-->
                </div>          
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>

<!-- slider Area End-->
<!--?  Contact Area start  -->
<section class="contact-section">
    <div class="container">
        
         <h2 class="contact-title">Customer: <?php echo $r1['name']; ?></h2>
        <div class="row">
            <div class="col-12">
            <div class="panel-group" id="accordion">
                        

                        <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">

                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">

					    <a data-toggle="collapse" data-parent="#accordion" href="#faq1">

						1. What to do you want to sell?

					    </a>

					</h4>
                                </div>
                                <div id="faq1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    <div class="form-group">

                                    <label class="control-label col-sm-2" for="pwd">Category :</label>
                                        <div class="col-sm-10">
                                       
                                              <select class="form-control" name="category">
                                                <option value="Electronics">Electronics</option>
                                                <option value="Watches">Watches</option>
                                                <option value="Phones">Phones</option>
                                                <option value="Fashion">Fashion</option>
                                                <option value="Clothes">Clothes</option>
                                                <option value="Shoes">Shoes</option>
                                                <option value="Kitchen">Kitchen</option>
                                                
                                               
                                              </select>
                                              <br>
                                             </div>       
                                            <br>       
                                                    
                                        <label class="control-label col-sm-2" >Item Name:</label>
                                          <div class="col-sm-10">
                                            <input type="text" class="form-control" name="itemname" placeholder="Enter the listing name">
                                          </div>       
                                          </div>   

                                                                          
                                    </div>
                                </div>
                            </div>
                          
                            <!-- /.panel -->

                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">

					    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">

						2. Tell more about your product.

					    </a>

					</h4>
                                </div>

                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <label class="control-label col-sm-2" >Description:</label>
                                         <div class="col-sm-10">
                                        <textarea class="form-control" rows="5" name="description"></textarea>
                                        <br>
                                        </div>
                                    
                                    <label class="control-label col-sm-2" >Images :</label>
                                         <div class="col-sm-10">
                                       <input type="file" class="form-control" name="file" placeholder="Enter the image URL Eg: img/image.jpg">
                                       <br>
                                        </div>


                                        </div>
                                </div>
                            </div>
                            <!-- /.panel -->


                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">

					    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">

						3. Prices and Time period

					    </a>

					</h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <label class="control-label col-sm-2" >Starting Price:</label>
                                         <div class="col-sm-10">
                                       <input type="text" class="form-control" name="startingprice" placeholder="Enter the Starting Value in Rupees">
                                       <br>
                                        </div>

                                       <label class="control-label col-sm-2" for="comment">Expected Price:</label>
                                        <div class="col-sm-10">
                                       <input type="text" class="form-control" name="expectedprice" placeholder="Enter the Expected Value in Rupees">
                                       <br>
                                        </div>

                                        <label class="control-label col-sm-2" for="comment">End Date:</label>
                                        <div class="col-sm-10">
                                       <div class="container" >
                                        
                                        <div class="container">
                                            <input required value="<?php echo date('d-m-Y'); ?>" class="date-picker" type="text" id="datepicker" name="endtime">

                                        </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- /.panel -->

                        </div>
                        <br>
                        
                         <input type="submit" align ="left" name="btn" class="btn btn-primary center-block" type="submit" value="Submit Listing">
                       
                        <!-- /.panel-group -->
                    </form>

                    </div>
               
          
               
				
				
            </div>
           
			
			
        </div>
    </div>
</section>
<!-- Contact Area End -->
</main>
<footer>
    <div class="footer-wrapper section-bg2 pl-100"  data-background="assets/img/gallery/footer-bg.png">
        <!-- Footer Start-->
        
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                 <?php include("title.php"); ?><a href="https://colorlib.com" target="_blank"></a>
                                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Footer End-->
          <!-- Map -->
        
    </div>
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>
<!-- JS here -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

</body>
</html>