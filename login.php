<?php 
include "admin/Classes/dp.php";
include "admin/Classes/users_class.php";
if (isset($_POST['submit'])){


$username = $_POST['name'];
$password = $_POST['password'];
$login = new users();
$login->login($username,$password);
}
?>
<!DOCTYPE html>$<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            background-image: url("img/rest2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
      
  </head>
  <body>
    <center style="color:#FAEBD7; font-size:35px; margin-top:100px; transform: translate(20px);text-shadow: 2px 2px black;">Login</center><br>
   <center style="color:white; font-size:20px;"> 
   <form action="" method="post">
   <ul>
   <li>
   
   <input type="text" name="name"  placeholder="Username ">
   </li><br>   
   <li>
   <input type="password" name="password" placeholder="Password" />
   </li><br>
   <li>
   <input type="submit" class="btn btn-primary" style="border-radius: 10px; color:white" name="submit" value="Login">
   </li>
   <li>
  <h5 style="font-size: 16px;color:#FFFAF0"> do you haven't any account ? <a href="signup.php"  class="btn btn-success" style="border-radius: 10px; color:white" value="signup" type="submit">Signup</a></h5>
   </li>
   <ul>
   </form>
  </center>
   
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>



