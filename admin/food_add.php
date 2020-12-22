<?php 
include "Classes/dp.php";
include "Classes/foods_class.php";
$msg = '';
if (isset($_POST['add'])){
   
  if (empty($_POST['fname'])){
$msg = "<div class='alert-danger'>Please, Wrhite The food Name</div>";
  }else if (empty($_POST['fprice'])){
    $msg = "<div class='alert-danger'>Please, Wrhite The food Price</div>";
  }else if (empty($_POST['fdescription'])){
    $msg = "<div class='alert-danger'>Please, Wrhite The food Description</div>";
  }else {
    $food = new Foods();
    $image_name = $_FILES['Image']['name'];
  $image_tmp = $_FILES['Image']['tmp_name'];
  $folder = rand(0,1000). '_' .$image_name;
  move_uploaded_file($image_tmp,"uploadImg\\".$folder);
      $name = $_POST['fname'];
    $price = $_POST['fprice'];
    $description = $_POST['fdescription'];
    $foodcategory = $_POST['category'];
    
    $food->addfood($name,$folder,$price,$description,$foodcategory);
    $msg = "<div class='alert-success'>The Data Inserted Sucessfully</div>";
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Food_add</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            background-image: url("img/dash1.jpg");
            
        }
    </style>  
</head>
  <body>
    <?php include "dashboard.php";?>
    <form action="" method="post"  enctype="multipart/form-data">
      <?php echo $msg;?>
    <div class="form-group">
    <label style="margin-top: 50px; font-size:20px ;color:white">Food Name :</label>
    <input type="text" name="fname">
      </div>
      <div class="form-group">
    <label style="margin-top: 40px; font-size:20px ;color:white">Food Image :</label>
    <input type="file" name="Image">
      </div>
      <div class="form-group">
      <label style="margin-top: 40px; font-size:20px ;color:white">Food Price :</label>
      <input type="number" name="fprice">
      </div>
      <div class="form-group">
      <label style="margin-top: 40px; font-size:20px ;color:white">Food Description :</label>
      <textarea style="width: 300px;height:100px" name="fdescription"></textarea>
      </div>
      <div class="form-group">
    <label style="margin-top: 40px; font-size:20px ;color:white">Food Category :</label>
        <select name="category">
        <?php
      $foodfetch = new Foods(); 
       $rows = $foodfetch->food_category();
      foreach ($rows as $row){
      ?>
          <option value="<?php echo $row['Id'];?>"><?php echo $row['Name'];?></option>
          <?php
      }
      ?>
        </select>
      
      </div>
      <input type="submit" class="btn btn-success" style="border-radius: 15px;transform: translate(180px); padding: 3px 30px;" value="add" name="add">
      </form>
  
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>