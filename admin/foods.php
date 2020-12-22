<?php 
include "Classes/dp.php";
include "Classes/foods_class.php";
$msg = '';
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $delete = new Foods();
  $delete->deleteFood($id);
  $msg= "<div class='alert-success'>The Food Deleted Sucessfully </div>";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Foods</title>
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
      <span style="margin-top: 8px;"><?php echo $msg ;?></span>
      <table class="table table-bordered" style="margin-top: 10px">
          <tr>
              <th>id</th>
              <th>Food Name</th>
              <th>Food Image</th>
              <th>Food Price</th>
              <th>Food Description</th>
              <th>Food Category</th>
              <th> Date</th>
              <th>Delete</th>
          </tr>
          <?php 
       $fetch_foods = new Foods();
     $rows =  $fetch_foods->fetch_foods();
       foreach ($rows as $row){
          ?>
          <tr>
             <td><?php echo $row['Id'];?></td>
              <td><?php echo $row['Name'];?></td>
              <td><img src="uploadImg/<?php echo $row['Image'];?>"  width="70px" height="50px"></td>
              <td><?php echo $row['Price'];?></td>
              <td><?php echo $row['Description'];?></td>
              <?php
              $fetch_categoryName = new Foods();
              $data = $fetch_categoryName->categoryName();
              ?>
              <td> <?php echo $data['Name'];?></td>
            
              <td><?php echo $row['Date'];?></td>
              <td><a href="foods.php?id=<?php echo $row['Id'];?>"><input type="submit" value="Delete" class="btn btn-danger" style="border-radius: 10px" name="delete"></td></a>
          </tr>
          <?php 
           }
           ?>
      </table>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>