<?php 
include "admin/Classes/foods_class.php";?>
<div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row">
                            <?php 
                            $food = new Foods();
                            $rows = $food->fetch_food_dinner();
                            if($rows){
                        
                          foreach ($rows as $row){
                      ?>    
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="admin/uploadImg/<?php echo $row['Image'];?>" alt="" width="250px" height="200px">
                        </div>
                        <div class="info">
                            <h3><?php echo $row['Name'];?></h3>
                            <p><?php echo $row['Description'];?></p>
                            <span><?php echo $row['Price'];?> $</span>
                        </div>
                    </div>
                </div>
                <?php 
            }
        }
            ?>
            </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row">
                            <?php 
                            $food_break = new Foods();
                           $rows = $food_break->fetch_food_breakfast();
                           if($rows){
                           foreach ($rows as $row){
                           ?>
                   <div class="col-xl-6 col-md-6 col-lg-6">
                       <div class="single_delicious d-flex align-items-center">
                           <div class="thumb">
                               <img src="img/delicious/1.png" alt="">
                           </div>
                           <div class="info">
                           <h3><?php echo $row['Name'];?></h3>
                           <p><?php echo $row['Description'];?></p>
                           <span><?php echo $row['Price'];?> $</span>
                           </div>
                       </div>
                   </div>
                   <?php
               }
            }
               ?>
            </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="row">
                        <?php 
                            $foods = new Foods();
                            $rows = $food->fetch_food_lunch();
                            if($rows){                            
                            foreach($rows as $row){
                      ?>      
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="admin/uploadImg/<?php echo $row['Image'];?>" alt="" width="250px" height="200px">
                        </div>
                        <div class="info">
                        <h3><?php echo $row['Name'];?></h3>
                        <p><?php echo $row['Description'];?></p>
                        <span><?php echo $row['Price'];?> $</span>
                        </div>
                    </div>            
                </div>
                            <?php 
                        }
                    }
                        ?>
            </div>
                    </div>
                  </div>








                