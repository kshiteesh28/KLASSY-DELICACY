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
    <title>Klassy</title>
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
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
    

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
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="Snacks Bar html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="chefhome.php" >Home</a></li>
                            
                            
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
                            
                            <li class="scroll-to-section"><a href="Orders.php"class="active">Orders</a></li> 
                            <li class="scroll-to-section"><a href="../login/logout.php">Logout</a></li>
                           <!-- <li class="submenu">
                                <a href="javascript:;">Service</a>
                                <ul>
                                    <li><a href="managing_food.html">Manage Food</a>
                                    <li><a href="#">Manage Wallet</a></li>
                                    <li><a href="users.html">Users</a></li>
                                    <li><a href="Feedback.html">Feedbacks</a></li>
                                </ul>
                            </li>
                             <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                           
                        </ul>        
                       
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <?php 

      require('../connect.php');
      $key = date("ymd");
      
      
      if(isset($_POST['buttoN'])) {
        echo "button active";
        if($_POST['buttoN'] == "ACCEPTED")
        {$status="ACCEPTED";}
        else if($_POST['buttoN'] == "REJECTED")
        {
          $status = "REJECTED";
        }

      
        $id = $_POST['ord_id'];
        echo $status;
        echo $id;
        $queryy_status = "UPDATE bill_info SET STATUS='$status' where ORD_ID='$id'";
        $queryy_result = mysqli_query($connection,$queryy_status);
      }

      $order_query = "SELECT * FROM bill_info WHERE ORD_ID LIKE '$key%' ORDER BY ORD_TIME DESC";
      $order_result = mysqli_query($connection,$order_query);


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
        <th scope="col">Order_id</th>
        <th scope="col">Order Details</th>
      </tr>
    </thead>

  <?php 
    $i=1; 
    while($order_row = $order_result->fetch_assoc()) {  ?>
    <tbody>   
      <tr>
        <th scope="row"><?php echo $i++?></th>
        <td><?php echo $order_row['ORD_ID']; ?></td>
        <div class="col-lg-12">
        <td style="margin-left:35px; ">
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal<?php echo$i ?>" style="padding: 6px 12px;background-color: #fb5849;font-size:14px;">Order Details</button>
            <!-- Modal starts-->
    <div class="modal fade" id="myModal<?php echo$i ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">
          <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ordered item</th>
                    <th scope="col">Quantity</th>
                  
                  </tr>
                </thead>
                <tbody>

            <?php
            //code for generating each food item for a given order_id
            $ord_id = $order_row['ORD_ID']; $a=1;
            $item_query = "SELECT * FROM order_info WHERE ORD_ID = '$ord_id'";
            $item_result = mysqli_query($connection,$item_query);
            while($item_row = $item_result->fetch_assoc()) { ?>
                  <tr>
                    <th scope="row"><?php echo $a++; ?></th>
                    <td><?php echo $item_row['FOOD_NAME']; ?></td>
                    <td>x<?php echo $item_row['QUANTITY']; ?></td>
                  </tr>
              <?php  } ?>
                </tbody>
              </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

          <!-- modal ends here-->
        </td> 
        </div>
        <div class="col-lg-12">
          
          <td style="margin-left:35px;">
      <?php if($order_row['STATUS'] == NULL){ ?>

        <form action="Orders.php" method="post"> 
        <input type = "hidden" name="ord_id" value="<?php echo $order_row['ORD_ID']?>">
        
        <span><button type="submit" class="btn btn-danger" name="buttoN" value="ACCEPTED"  style="background-color: #fb5849">Accept</button> </span>  
      
        <span><button type="submit" class="btn btn-danger" name="buttoN" value="REJECTED"  style="background-color: #fb5849">Reject</button> </span>   
      </form>
         <?php }
         else{
           echo $order_row['STATUS'];}?>
      </td>
        </div>
      </tr>
    </tbody>
    <?php }?>
  </table>
  </div>
</section>
  
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
                <div class="col-lg-4" >
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/white-logo.png" alt=""></a>
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
