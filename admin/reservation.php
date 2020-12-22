<?php include "Classes/dp.php";
include "Classes/reservation_class.php";?>
<?php
$msg = '' ;
if (isset($_GET['id'])){
  $id = $_GET['id'];
  $delete = new Reservation();
  $delete->delete($id);
  $msg = "<div class='alert-danger'>The Reservation deleted Sucessfully</div>";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Reservation</title>
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
  <center style="margin-top:10px"><h3 style="color: white;text-shadow: 2px 2px black;">Reservation Details</h3></center>
  <?php echo $msg;?>
  <table class="table table-bordered" style="margin-top: 40px">

          <tr>
              <th>id</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Data</th>
              <th> Food Category</th>
              <th>Username Account</th>
              <th>Delete</th>
          </tr>
          <tr>
          <?php 
          $reservation = new Reservation();
         $rows = $reservation->fetchAll();
         foreach ($rows as $row){

         ?>  
              <td><?php echo $row['id'];?></td>
              <td><?php echo $row['Name'];?></td>
              <td><?php echo $row['Phone'];?></td>
              <td><?php echo $row['Data'];?></td>
              <?php 
              $category = $reservation->categoryName();
              $data = $category;
              ?>
              <td><?php echo $data['Name'];?></td>
             <?php
              $username = $reservation->username();
              $data = $username;
              ?>
              <td><?php echo $data['Username'];?></td>
              <td><a href="reservation.php?id=<?php echo $row['id'];?>"><input type="submit" class="btn btn-danger" style="border-radius: 10px" name="delete" value="Delete"> </a></td>
              <?php 
            }
            ?>
          </tr>
      </table>
    
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>