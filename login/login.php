<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="shortcut icon" href="../images/favicon.png" type="">
</head>
<body>
<?php include "login.html" ?>
<?php
    require('../connect.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['login'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($connection, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($connection, $password);
        // Check user is exist in the database
        $password = md5($password);
        $query    = "SELECT * FROM login_details WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($connection, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);

        echo $password;
        if($rows == 1)
        {
           // $admin_query = "SELECT * from user where USER_ID in (select USER_ID FROM LOGIN_DETAILS WHERE USERNAME = '$username')";
           // $admin_result = mysqli_query($connection,$admin_result);
            if($username == "admin" )
            {
                header("Location: ../AdminPage/index.php");
            }
            else if($username == "chef" )
            {
                header("Location: ../AdminPage/chefhome.php");
            }
            else{
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;
                    echo "haha youre in";
                    // Redirect to user dashboard page
                    header("Location: ../userHome.php");
            }
        }
        else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } /*else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="signup.php">New Registration</a></p>
  </form>
<?php
    }
?>
*/
?>
</body>
</html>