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
    <title>Managing Food</title>
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

   <!-- header area end -->>
    <section class="section" id="managing_food">
      <div class="container">
          <div class="row">
              <div class="col-lg-4 offset-lg-4 text-center">
                  <div class="section-heading">
                      <h6>User Table</h6>
                      
                  </div>
              </div>
          </div>
    <div class="col-lg-6">
    <div class="contact-form">
        <form id="contact" action="managing_food.php" method="post">
         
          <div class="row">
            <div class="col-lg-12">
                <h4 style="margin-top:50px";>Food To Add </h4>
            </div>
            <div class="col-lg-6 col-sm-12">
              <fieldset>
                <input name="food_name" type="text" id="name" placeholder="Food Name*" required="">
              </fieldset>
            </div>
            <div class="col-lg-6 col-sm-12">
              <fieldset>
              <input name="food_price" type="number"  placeholder="Price" required="">
            </fieldset>
            </div>
            <div class="col-lg-6 col-sm-12">
              <fieldset>
                <input name="food_id" type="text" placeholder="Food Id*" required="">
              </fieldset>
            </div>
            <div class="col-md-6 col-sm-12">
              <fieldset>
              <input name="image" type="text" placeholder="Image name" required="">
              </fieldset>
            </div> 

            <div class="col-md-6 col-sm-12">
              <fieldset>
                <select value="time" name="food_type" >
                    <option value="time">Category</option>
                    <option name="North_Indian" id="North Indian">North_Indian</option>
                    <option name="South_Indian" id="South Indian">South_Indian</option>
                    <option name="Your_Choice" id="Your Choice">Your_Choice</option>
                    <option name="Be_verage" id="Beverage">Be_verage</option>
                </select>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <textarea name="food_desc" rows="6" id="message" placeholder="Food Description" required=""></textarea>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <button type="submit" name="addfood" id="form-submit" class="main-button-icon">Add Food</button>
              </fieldset>
            </div>
          </div>
        </form>
    </div>


    <div class="contact-form">
        <form id="contact" action="managing_food.php" method="post">
         
          <div class="row">
            <div class="col-lg-12">
                <h4 style="margin-top:50px";>Food To remove </h4>
            </div>
            
            <div class="col-lg-6 col-sm-12">
              <fieldset>
                <input name="foodid" type="text" placeholder="Food Id*" required="">
              </fieldset>
            </div>

            <div class="col-lg-12">
              <fieldset>
                <button type="submit" name="removefood" id="form-submit" class="main-button-icon">Remove Food</button>
              </fieldset>
            </div>
          </div>

</div> 
</div>
</div>
</section>
</section>

<!-- ***** code for inserting into database ***** -->
<?php 
  require ('../connect.php');
  if(isset($_POST['addfood']))
  {
    $food_id = $_POST['food_id'];
    $food_name = $_POST['food_name'];
    $food_type = $_POST['food_type'];
    $food_price = $_POST['food_price'];
    $image = $_POST['image'];
    $food_desc = $_POST['food_desc'];


    $food_query    = "INSERT into food (food_id,food_name,food_type,food_price,image,food_desc) VALUES ('$food_id','$food_name','$food_type','$food_price','$image','$food_desc')";
    $food_result   = mysqli_query($connection, $food_query);
  }
  else if(isset($_POST['removefood']))
  {
    $foodid=$_POST['foodid'];
    
    $remove_query="delete from food where FOOD_ID = '$foodid'";
    $remove_result=mysqli_query($connection,$remove_query);
  }

?> 

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