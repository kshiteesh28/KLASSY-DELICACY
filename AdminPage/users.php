<?php
require ('../connect.php');
session_start();
?>
<?php 
if (isset($_POST['addmoney'])){
  $new=$_POST['newbalance'];
  $old=$_POST['oldbalance'];
  $user_id=$_POST['user_id'];

  if($new>$old){
    $user_id=$_POST['user_id'];
    $wallet_query="UPDATE USER SET WALLET='$new' where USER_ID='$user_id'";
    $result_wallet = mysqli_query($connection,$wallet_query);
  }
}  ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Users Details</title>
    <link rel="shortcut icon" href="../images/favicon.png" type="">
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
    <!-- ***** Preloader End ***** -->
    
    
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
    <!-- ***** Header Area End ***** -->

    <?php
    
    $user_query = "SELECT * FROM user";
    $result = mysqli_query($connection,$user_query);
    ?>

<!--Table Starts -->
<section class="section" id="users">
  <div class="container">
      <div class="row">
          <div class="col-lg-4 offset-lg-4 text-center">
              <div class="section-heading">
                  <h6>User Table</h6>
                  
              </div>
          </div>
      </div>
  
<table class="table table-striped" style="margin-top:100px;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User_id</th>
      
      <th scope="col">Wallet</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
  $i=1;
      while($row = mysqli_fetch_assoc($result)) { ?>
      <form method="post" action="users.php">
    <tr>
      <th scope="row"><?php echo $i++ ?></th>
      <td><?php echo $row['USER_ID'] ?></td>
      <div class="col-lg-12">
        
        <td style="margin-left:35px;">
        <input class="cart-quantity-input" name = "newbalance" type="number" value="<?php echo $row['WALLET']?>" style="height: 34px;
          width: 100px;
          border-radius: 5px;
          border: 1px solid #56CCF2;
          background-color: white;
          color: #333;
          padding: 0;
          text-align: center;
          font-size: 1.2em;
          margin-right: 25px;">
          <input type = "hidden" name="user_id" value="<?php echo $row['USER_ID']?>">
          <input type = "hidden" name="oldbalance" value="<?php echo $row['WALLET']?>">
        <button type="submit" class="btn btn-danger" name="addmoney" style="background-color: #d0a0ff">Add Money</button>        
        </td>
      </div>
    </tr>
      </form>
  <?php } ?>
  </tbody>
</table>


  <div class="col-lg-12">
    <fieldset>
      <button type="button" id="form-submit" class="main-button-icon"><a style="color:white;" href=Addusers.php>Add User</a> </button>
       
      <button type="button" id="form-submit" class="main-button-icon"><a style="color:white;" href="removeusers.php">Remove</a></button>
      </fieldset>
    </div>
  </section>

 
  <!--table end-->
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