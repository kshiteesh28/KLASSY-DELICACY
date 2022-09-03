<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../images/favicon.png" type="">
    <title>Users</title>
<!--
    
TemplateMo 558 Snacks Bar

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!--***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img src="assets/images/klassy-logo.png" align="Klassy html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" class="active">Home</a></li>
                            
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            
                         
                            <li class="submenu">
                            <a href="javascript:;">Chefs</a>
                                <ul>
                                    <li><a href="chefs.php">Chefs</a>
                                    <li><a href="admin_OD.php">Orders</a></li>
                                    
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Service</a>
                                <ul>
                                    <li><a href="managing_food.php">Manage Food</a>
                                    <li><a href="users.php">Users</a></li>
                                    <li><a href="Feedback.php">Feedbacks</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="contact.php">Contact Us</a></li> 
                            <li class="scroll-to-section"><a href="../login/logout.php">Logout</a></li> 
                        </ul>        
                       
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header area ends -->
<div class="col-lg-6">
    <div class="contact-form">
        <form id="contact" action="" method="post">
          <div class="row">
            <div class="col-lg-12">
                <h4>Users</h4>
            </div>
            
            <div class="col-lg-6 col-sm-12">
              <fieldset>
              <input name="user_id" type="text" id="text"  placeholder="User Id*" required="">
              <input name="permission" type="text" id="text"  placeholder="Permission*" required="">
            </fieldset>
            </div>
            <div class="col-lg-6 col-sm-12">
              <fieldset>
                <input name="wallet" type="number" id="number" placeholder="Wallet*" required="">
              </fieldset>
            </div>
           <!-- <div class="col-md-6 col-sm-12">
              <fieldset>
                <div class="drop-down"> <select name="options">
                  <option>Images</option> 
                   <option class="" value="North_Indian" style="background-image:url('');">North Indian</option> 
                    </select> </div>
              </fieldset>
            </div> 
           <div class="col-lg-6">
                <div id="filterDate2">    
                  <div class="input-group date" data-date-format="dd/mm/yyyy">
                    <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                    <div class="input-group-addon" >
                      <span class="glyphicon glyphicon-th"></span>
                    </div>
                  </div>
                </div>   
            </div> 
            <div class="col-md-6 col-sm-12">
              <fieldset>
                <select value="time" name="time" id="time">
                    <option value="time">Category</option>
                    <option name="North Indian" id="North Indian">North Indian</option>
                    <option name="South Indian" id="South Indian">South Indian</option>
                    <option name="Your Choice" id="Your Choice">Your Choice</option>
                    <option name="Beverage" id="Beverage">Beverage</option>
                </select>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <textarea name="Food Description" rows="6" id="message" placeholder="Food Description" required=""></textarea>
              </fieldset>
            </div> -->
            <div class="col-lg-12">
              <span>
                <button type="submit" name="adduser" id="form-submit" class="main-button-icon">Add User</button>
               
              </span>
         <!--   </div>
            <div class="col-lg-12">
                <span>
                 
                  <button type="submit" id="form-submit" class="main-button-icon">Remove</button>
              </span>
              </div>
          </div> -->
        </form>
    </div>
</div> 
</div>
</div>
</section>

<?php
require('../connect.php');
if(isset($_POST['adduser']))
{
  $user_id=$_POST['user_id'];
  $wallet=$_POST['wallet'];
  $permission=$_POST['permission'];

  $newuser_query    = "INSERT into user (user_id,permissions,wallet) VALUES ('$user_id','$permission','$wallet')";
  $newuser_result   = mysqli_query($connection, $newuser_query);
}


?>

<!-- ***** Reservation Area Ends ***** -->

<!-- ***** Footer Start ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xs-12">
                <div class="right-text-content">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="logo">
                    <a href="index.php"><img src="assets/images/white-logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 col-xs-12">
                <div class="left-text-content">
                    <p>© Copyright Snacks Bar Co.
                    
                    <br>Design: TemplateMo</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script> 
<script src="assets/js/slick.js"></script> 
<script src="assets/js/lightbox.js"></script> 
<script src="assets/js/isotope.js"></script> 

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
<script>

    $(function() {
        var selectedClass = "";
        $("p").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
        setTimeout(function() {
          $("."+selectedClass).fadeIn();
          $("#portfolio").fadeTo(50, 1);
        }, 500);
            
        });
    });

</script>
</body>
</html>