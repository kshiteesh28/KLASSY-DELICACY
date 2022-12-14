<?php 
    session_start(); 
    require ('connect.php');

    if(isset($_POST['remove'])) {
            
        if($_POST['remove'] == true){
            
            foreach($_SESSION['cart'] as $key => $value){

                if($value['FOOD_ID'] == $_POST['id']){
                    unset($_SESSION['cart'][$key]);

                }
            }
        }
    }
        

    if (isset($_POST['cart_button'])) {

        if(isset($_SESSION['cart'])) {
    
            $session_array_id = array_column($_SESSION['cart'],"FOOD_ID");
    
            if(!in_array($_POST['FOOD_ID'],$session_array_id)) {
    
                $session_array = array(
                    "FOOD_ID" => $_POST['FOOD_ID'],
                    "FOOD_NAME" => $_POST['FOOD_NAME'],
                    "FOOD_TYPE" => $_POST['FOOD_TYPE'],
                    "FOOD_PRICE" => $_POST['FOOD_PRICE'],
                    "IMAGE" => $_POST['IMAGE'],
                    "quantity" => $_POST['quantity']
    
                );
                $_SESSION['cart'][] = $session_array;
            }
        }
        else{
            $session_array = array(
                "FOOD_ID" => $_POST['FOOD_ID'],
                "FOOD_NAME" => $_POST['FOOD_NAME'],
                "FOOD_TYPE" => $_POST['FOOD_TYPE'],
                "FOOD_PRICE" => $_POST['FOOD_PRICE'],
                "IMAGE" => $_POST['IMAGE'],
                "quantity" => $_POST['quantity']
            );
            $_SESSION['cart'][] = $session_array;
        }
    }    
?>

<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <META HTTP-EQUIV="refresh" CONTENT="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Klassy </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style and js for cart-->
  <link href="css/responsive.css" rel="stylesheet" />


  

</head>
<body class="sub_page">

  <?php
  if($_SESSION['loggedin']===true)
  {
    ?>

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="userHome.php">
            <span>
              Klassy
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item">
                <a class="nav-link" href="userHome.php">Home </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="usermenu.php">Menu <span class="sr-only">(current)</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="userabout.php">About</a>
              </li>
             
            </ul>
            <div class="user_option">
              <a href="login.js" class="user_link">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <a class="cart_link" href="#CART">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                   C457.728,97.71,450.56,86.958,439.296,84.91z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                    </g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                </svg>
              </a>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
              <a href="login/logout.php" class="order_online">
                Logout
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- food section -->

  <section class="food_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Menu
        </h2>
      </div>

      <ul class="filters_menu">
        <li class="active" data-filter="*">All</li>
        <li data-filter=".South_Indian">South Indian</li>
        <li data-filter=".North_Indian">North Indian</li>
        <li data-filter=".Your_Choice">Your Choice</li>
        <li data-filter=".Be_verage">Beverage</li>
      </ul>
      <div class="filters-content">
        <div class="row grid">
    <?php
    
    $food_query = "SELECT * FROM food";
    $result = mysqli_query($connection,$food_query);
    ?>
   <?php
      while($row = mysqli_fetch_assoc($result)) { ?>

            <form method = "post" action="usermenu.php?FOOD_ID=<?$row['FOOD_ID']?>">
          <div class="col-sm-6 col-lg-4 all <?php echo$row['FOOD_TYPE']?>" id = "<?php echo$row['FOOD_TYPE']?>">
            <div class="box">
              <div>
                <div class="img-box">
                  <img class="shop-item-image" src="images/<?php echo$row['IMAGE']?>.png" alt="">
                </div>
                <div class="detail-box">
                  <h5 class="shop-item-title">
                  <?php echo$row['FOOD_NAME']?> 
                  </h5>
                  <p>
                    <?php echo$row['FOOD_DESC']?>
                  </p>
                  <div class="options">
                    <h6 class="shop-item-price">
                      ???<?php echo$row['FOOD_PRICE']?>
                    </h6>

                    <input type = "hidden" name="FOOD_ID" value="<?php echo $row['FOOD_ID']?>">
                    <input type = "hidden" name="FOOD_NAME" value="<?php echo $row['FOOD_NAME']?>">
                    <input type = "hidden" name="FOOD_TYPE" value="<?php echo $row['FOOD_TYPE']?>">
                    <input type = "hidden" name="FOOD_PRICE" value="<?php echo $row['FOOD_PRICE']?>">
                    <input type = "hidden" name="IMAGE" value="<?php echo $row['IMAGE']?>">
                    
                    <input type = "number" class="quantity1" name="quantity" min="1" step="1" value="1">
                    <button type="submit" name="cart_button" class="cartbutton">
                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                         C457.728,97.71,450.56,86.958,439.296,84.91z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                          </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>
                     </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </form>
      <?php
    }
    ?>
    </div>
    </div>
      <div class="btn-box">
        <a href="">
          View More
        </a>
      </div>
    </div>
  </section>

  <section class="container content-section">
            <h2 class="section-header" id="CART">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">QUANTITY</span>
                <span class="cart-price cart-header cart-column">RATE</span>
                <span class="cart-quantity cart-header cart-column">VALUE</span>
            </div>

     <?php
       
        $total=0;
        if(!empty($_SESSION['cart'])) {

            foreach($_SESSION['cart'] as $key => $value) { ?>
                <form action="usermenu.php" method="post">
                <div class="cart-items">
                <div class="cart-row">
                    <div class="cart-item cart-column">
                        <img class="cart-item-image" src="images/<?php echo$value['IMAGE']?>.png" width="100" height="100">
                        <span class="cart-item-title"><?php echo$value['FOOD_NAME']?></span>
                    </div>
                    <span class="cart-price cart-column"><?php echo $value['quantity'];?></span>
                    <span class="cart-price cart-column"><?php echo $value['FOOD_PRICE'];?></span>
                    <div class="cart-quantity cart-column">
                    <span class="cart-price cart-column"><?php $Price = (int)$value['FOOD_PRICE'] * (int)$value['quantity']; echo $Price;?></span>
                    
                    <input type = "hidden" name="id" value="<?php echo $value['FOOD_ID']?>">
                    <input type = "hidden" name="remove" value="true">
                    <button class="btn btn-danger" type="submit">REMOVE</button>
                    
                    </div>
                </div>
                </div>
               </form>
                <?php
                $total=$total+$Price;
              
            } ?>


            <?php 
            //fetching wallet money using sql query
            $name = $_SESSION['username'];
            $wallet_query = "SELECT * from user where USER_ID in (select USER_ID FROM LOGIN_DETAILS WHERE USERNAME = '$name')"; 
            $wallet_result = mysqli_query($connection,$wallet_query);
            $wallet = $wallet_result->fetch_assoc();
            $_SESSION['wallet']=$wallet['WALLET'];
            
            ?>

            <div class="cart-total">
                
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">???<?php echo $total?></span>
                <?php if($total>$wallet['WALLET'])
                {?>
                  <button class="btn btn-primary btn-purchase" onclick="alert('You dont have enough money in wallet')" type="button">PURCHASE</button>
               <?php }
               else{ ?>
                <button class="btn btn-primary btn-purchase" onclick="window.location.href='bill.php'" type="button">PURCHASE</button>
                <?php }?>
            </div>
            
            <?php     }
?>
            
        </section> 
  <!-- end food section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +91 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  rv@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Klassy
            </a>
            <p>
            Klassy brings you the best blend of spices, thinking of a country?...
                       Just say Klassy..!!
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            10.00 Am -10.00 Pm
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
           &copy;<span id="displayYear"></span> 
        
          <a href="https://www.linkedin.com/in/seyedpouya-sadri-fard/"></a><br><br>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->
    
  <?php
  }
  if($_SESSION['loggedin']!=true)
    header("Location: home.php");
?>

</body>
</html>