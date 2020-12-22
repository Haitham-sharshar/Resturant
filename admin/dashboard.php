<?php include "header.php";?>
<!doctype html>
<html lang="en">
  <head>
    <title>Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            background-image: url("img/dash1.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        li{
            list-style: none;
        }
       div .col-md{
           margin-top: 125px
        }
        div .col-md-3  a{
            text-decoration: none;
        }
    </style>
  </head>
  <body>
  <div class="container">
        <div class="row">
            <div class="col-md">
            <a href="categories.php" > <button class="btn btn-primary" style="border-radius: 10px;" ><h4 style="color: wheat">Categories of Foods</h4></button> </a>
            </div>
            <div class="col-md">
            <a href="food_add.php" > <button class="btn btn-danger" style="border-radius: 10px;" ><h4 style="color: wheat">Add Foods</h4></button> </a> 
            </div>
            <div class="col-md">
            <a href="foods.php" > <button class="btn btn-danger" style="border-radius: 10px;" ><h4 style="color: wheat">Foods</h4></button> </a> 
            </div>
            <div class="col-md">
            <a href="reservation.php" > <button class="btn btn-dark" style="border-radius: 10px;" ><h4 style="color: wheat">Reservation</h4></button> </a>
            </div>
            <div class="col-md">
           <a href="contact.php" > <button class="btn btn-success" style="border-radius: 10px;" ><h4 style="color: wheat">Contact</h4></button> </a>
            </div>
        </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


