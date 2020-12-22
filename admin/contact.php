<?php include "Classes/dp.php";
include "Classes/contact_class.php";?>

<!doctype html>
<html lang="en">
  <head>
    <title>Contact</title>
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
  <center style="margin-top:10px"><h3 style="color: white;text-shadow: 2px 2px black;">Contact </h3></center>
  <table class="table table-bordered" style="margin-top: 40px">
          <tr>
              <th>id</th>
              <th>Message</th>
              <th>Name</th>
              <th>Email</th>
              <th>subject</th>
              <th>Date</th>
              
          </tr>
          <?php 
          $contact = new contact();
          $rows = $contact->fetchContact();
          foreach ($rows as $row){
            ?>         
          <tr>
              <td><?php echo $row['Id'];?></td>
              <td><?php echo $row['Message'];?></td>
              <td><?php echo $row['Name'];?></td>
              <td><?php echo $row['Email'];?></td>
              <td><?php echo $row['Subject'];?></td>
              <td><?php echo $row['Date'];?></td>
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