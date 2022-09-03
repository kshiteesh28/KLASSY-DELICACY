<?php
    session_start();
    require('connect.php');

    //echo $_SESSION['user_id'];
    //generating user_id using username
    /*$name = $_SESSION['username'];
    $userid_query = "SELECT * from user where USER_ID in (select USER_ID FROM LOGIN_DETAILS WHERE USERNAME = '$name')"; 
    $userid_result = mysqli_query($connection,$userid_query);
    $userid = $userid_result->fetch_assoc();
    $cust_id=$userid['USER_ID'];
    //generating required substr
    $id=substr($cust_id,3,10);
    //echo $id;
    //generating order_id
    $ord_id = date("ymdhis") . $id;
    //echo "order id is ";echo $ord_id;

    $total=0;
    
    foreach($_SESSION['cart'] as $key => $value)
    {
        //echo $value['FOOD_NAME'];
        $quantity = $value['quantity'];
        $food_id = $value['FOOD_ID'];
        $price = (int)$value['FOOD_PRICE'] * (int)$value['quantity'];
        $query    = "INSERT into order_info(ord_id,food_id,quantity,price) VALUES ('$ord_id','$food_id','$quantity','$price')";
        $result   = mysqli_query($connection, $query);
        $total=$total+$price;
    }    
    $query_bill = "INSERT INTO BILL_INFO(CUST_ID,ORD_ID,ORD_TIME,DATE,TOTAL_AMOUNT) VALUES ('$cust_id','$ord_id',CURRENT_TIME,CURRENT_DATE,'$total')";
    $result_bill = mysqli_query($connection, $query_bill); */
    
    $ord_id = $_SESSION['ord_id'];
    $status_query = "SELECT * FROM BILL_INFO WHERE ORD_ID = '$ord_id'";
    $status_result = mysqli_query($connection,$status_query);
    $status = $status_result->fetch_assoc();
    
?>


<!DOCTYPE html>
<html>
 
<head>
    <title>Klassy</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <style type="text/css">
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }
 
        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }
 
        img {
            -ms-interpolation-mode: bicubic;
        }
 
        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }
 
        table {
            border-collapse: collapse !important;
        }
 
        body {
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }
 
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }
 
        @media screen and (max-width: 480px) {
            .mobile-hide {
                display: none !important;
            }
 
            .mobile-center {
                text-align: center !important;
            }
        }
 
        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }
    </style>
 
<body style="margin: 0 !important; padding: 0 !important; background-color: #eeeeee;" bgcolor="#eeeeee">
    <div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: Open Sans, Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
        For what reason would it be advisable for me to think about business content? That might be little bit risky to have crew member like them.
    </div>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td align="center" style="background-color: #eeeeee;" bgcolor="#eeeeee">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                    <tr>
                        <td align="center" valign="top" style="font-size:0; padding: 35px;" bgcolor="#222831">
                            <div style="display:inline-block; max-width:50%; min-width:100px; vertical-align:top; width:100%;">
                                <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                                    <tr>
                                        <td align="left" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 36px; font-weight: 800; line-height: 48px;" class="mobile-center">
                                            <h1 style="font-size: 36px; font-weight: 800; margin: 0; color: #ffffff;">Klassy</h1>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div style="display:inline-block; max-width:50%; min-width:100px; vertical-align:top; width:100%;" class="mobile-hide">
                                <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                                    <tr>
                                        <td align="right" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; line-height: 48px;">
                                            <table cellspacing="0" cellpadding="0" border="0" align="right">
                                                <tr>
                                                    <td style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400;">
                                                        <p style="font-size: 18px; font-weight: 400; margin: 0; color: #ffffff;"><a href="userHome.php" target="_self" style="color: #ffffff; text-decoration: none;">Home &nbsp;</a></p>
                                                    </td>
                                                    <td style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 24px;"> <a href="userHome.php" target="_self" style="color: #ffffff; text-decoration: none;"><img src="https://img.icons8.com/color/48/000000/small-business.png" width="27" height="23" style="display: block; border: 0px;" /></a> </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tr>
            <?php   if($status['STATUS'] != NULL) { ?>
                    <tr>
                        <td align="center" style="padding: 35px 35px 20px 35px; background-color: #ffffff;" bgcolor="#ffffff">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                                <tr>
                            <?php   if($status['STATUS'] === "ACCEPTED"){ ?>     
                                    <td align="center" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;"> <img src="https://img.icons8.com/carbon-copy/100/000000/checked-checkbox.png" width="125" height="120" style="display: block; border: 0px;" /><br>
                                        <h2 style="font-size: 30px; font-weight: 800; line-height: 36px; color: #333333; margin: 0;"> Thank You For Your Order! </h2>
                                    </td>
                            <?php 
                        $user_id=$_SESSION['user_id'];
                        $totalmoney = $_SESSION['total'];
                        $wallet = $_SESSION['wallet'];
                        $totalmoney= $wallet-$totalmoney;
                        $update_amount = "UPDATE user set WALLET='$totalmoney' where USER_ID='$user_id'";
                        $amount_result = mysqli_query($connection,$update_amount);    
                        }
                                    else{ ?>
                                    <td align="center" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;"> <img src="https://png.pngtree.com/png-clipart/20190921/original/pngtree-true-and-false-symbols-accept-rejected-for-evaluation-vector-simple-png-image_4723246.jpg" width="125" height="120" style="display: block; border: 0px;" /><br>
                                        <h2 style="font-size: 30px; font-weight: 800; line-height: 36px; color: #333333; margin: 0;"> Sorry your order is cancelled Please try again </h2>
                                    </td>
                            <?php   } ?>
                                </tr>
                                <tr>
                                    <td align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">
                                        <p style="font-size: 16px; font-weight: 400; line-height: 24px; color: #777777;"> Hope you have your bestt at Klassy!! </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding-top: 20px;">
                                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tr>
                                                <td width="75%" align="left" bgcolor="#eeeeee" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;"> Order Confirmation # </td>
                                                <td width="25%" align="left" bgcolor="#eeeeee" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;"><?php echo $ord_id?></td>
                                            </tr>

                                  <?php     foreach($_SESSION['cart'] as $key => $value){ ?>
                                            <tr>
                                                <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;"><?php echo $value['FOOD_NAME'];echo"    x";echo $value['quantity']?></td>
                                                <?php $price = (int)$value['FOOD_PRICE'] * (int)$value['quantity'];?>
                                                <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">₹<?php echo $price;?></td>
                                            </tr>
                                        <?php } ?>    
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding-top: 20px;">
                                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tr>
                                                <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;"> TOTAL </td>
                                                <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;"> ₹<?php echo $status['TOTAL_AMOUNT'];?> </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" height="100%" valign="top" width="100%" style="padding: 0 35px 35px 35px; background-color: #ffffff;" bgcolor="#ffffff">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:660px;">
                                <tr>
                                    <td align="center" valign="top" style="font-size:0;">
                                        <div style="display:inline-block; max-width:50%; min-width:240px; vertical-align:top; width:100%;">
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                                                
                                            </table>
                                        </div>
                                        <div style="display:inline-block; max-width:50%; min-width:240px; vertical-align:top; width:100%;">
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                                                <tr>
                                                    <td align="left" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px;">
                                                        <p style="font-weight: 800;">Estimated Delivery Time</p>
                                                        <p>30mins</p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style=" padding: 35px; background-color: #313946;" bgcolor="#1b9ba3">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                                <tr>
                                    <td align="center" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;">
                                        <h2 style="font-size: 24px; font-weight: 800; line-height: 30px; color: #ffffff; margin: 0;"> Get 30% off your next order. </h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" style="padding: 25px 0 15px 0;">
                                        <table border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="center" style="border-radius: 5px;" bgcolor="#66b3b7"> <a href="usermenu.php" target="_self" style="font-size: 18px; font-family: Open Sans, Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; border-radius: 5px; background-color: #222831; padding: 15px 30px; border: 1px solid #222831; display: block;">Order Again</a> </td>
                                                <td align="center" style="border-radius: 5px;" bgcolor="#66b3b7"> <a href="feedback.php" target="_self" style="font-size: 18px; font-family: Open Sans, Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; border-radius: 5px; background-color: #222831; padding: 15px 30px; border: 1px solid #222831; display: block;">Rate us</a> </td>

                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
            <?php 
                foreach($_SESSION['cart'] as $key => $value){
                        unset($_SESSION['cart'][$key]);    
                    }
        
            }?>
                </table>
            </td>
        </tr>
    </table>
</body>
 
</html>
