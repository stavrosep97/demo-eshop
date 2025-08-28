<?php
    session_start();
    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $Username = $_POST['username'];
        $Email = $_POST['email'];
        $Password = $_POST['password'];

        $Hash = password_hash($Password, PASSWORD_DEFAULT);

        if(!empty($Username) && !empty($Email) && !empty($Password))
        {
            $query = "insert into users(username, email, password) values('$Username', '$Email', '$Hash')";
            mysqli_query($con, $query);
            echo"<script type = 'text/javascript'> alert('Successfully Register') </script>";
        }
        else
        {
            echo"<script type = 'text/javascript'> alert('Put some valid information') </script>";
        }
    }
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="design.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<?php
require_once "header.php";
?>

        <!--------Acount Page------>
        <div class="accountpage">
            <div class="container">
                <div class="row">
                    <div class="col2">
                        <img src="images/Shop.jpg">
                    </div>

                    <div class="col2">
                        <div class="formcontainer">
                            <div class="formbtn">
                                <span onclick="login()">Login</span>
                                <span onclick="register()">Register</span>
                                <hr id="indicator">
                            </div>

                            <form method = "POST" id="regform">
                                <input type="text" name = "username" placeholder="Username">
                                <input type="email" name = "email" placeholder="Email">
                                <input type="password" name = "password" placeholder="Password">
                                <button type="submit" class="btn">Register</button>
                            </form>
                            
                            <form  method = "POST" id="loginform">
                                <p style = "color:red" class="text-center"><?php if(isset($_GET['error'])){ echo $_GET['error'];}?></p>
                                <input type="text" name = "email" placeholder="Email">
                                <input type="password" name = "password" placeholder="Password">
                                <button type="submit" class="btn" name="login_btn">Login</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        


        <!--------Foutter-->
 <?php
require_once "header.php";
?>
       
        <script>
            var loginform = document.getElementById("loginform");
            var regform = document.getElementById("regform");
            var indicator = document.getElementById("indicator");

                function register(){
                    regform.style.transform = "translateX(0px)"
                    loginform.style.transform = "translateX(0px)"
                    indicator.style.transform = "translateX(100px)"
                }

                function login(){
                    regform.style.transform = "translateX(300px)"
                    loginform.style.transform = "translateX(300px)"
                    indicator.style.transform = "translateX(0px)"
                }


        </script>
      
    </body>
</html>