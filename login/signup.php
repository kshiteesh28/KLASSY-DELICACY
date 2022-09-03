<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/favicon.png" type="">
        <title>Klassy</title>
    <head>
    <body>

    
    <?php include "login.html" ?>
     <?php /*  <form action="signup.php"method="post">
            User_Id: <input type="text" name="user_id"><br><br>

            Username: <input type="text" name="username"><br><br>
            Phone: <input type="text" name="phone"><br><br>
            Password: <input type="password" name="password"><br><br>
            Confirm Password: <input type="password" name="cpassword"><br><br>
            <input type="submit" value="signup">

        </form>
        */ ?>
        <?php include "../connect.php"?>
      <?php 
        
      $user_id = $_POST["user_id"];
      $username = $_POST["username"];
      $phone = (int)$_POST["phone"]; 
      $password = $_POST["password"];
      $password = md5($password);
      //$cpassword = $_POST["cpassword"];
      
      //echo "id is $user_id whos name is $username $password $phone";

      $query    = "INSERT into login_details (user_id,username,password,phone) VALUES ('$user_id','$username','$password','$phone')";
      $result   = mysqli_query($connection, $query);
      
      ?>
    </body>
</html>