<?php
 include "admin/Classes/reservation_class.php";
 
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $food_category = $_POST['category'];
    $username_account = $_POST['useraccount'];
    $reservation = new Reservation();
    $reservation->insert_reservation($name,$phone,$date,$food_category,$username_account);
}
?>
<div class="Reservation_area">
        <div class="rev_icon_1 d-none d-md-block">
            <img src="img/icon/4.png" alt="">
        </div>
        <div class="rev_icon_2 d-none d-md-block">
            <img src="img/icon/5.png" alt="">
        </div>
        <div class="rev_icon_3 d-none d-md-block">
            <img src="img/icon/6.png" alt="">
        </div>
        <div class="container p-0">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-75">
                        <h3>Reservation</h3>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-xl-6 col-lg-6">
                    <div class="map_area">
                        <div id="map" style="height: 480px; position: relative; overflow: hidden;"> </div>
                        <script>
                            function initMap() {
                                var uluru = {
                                    lat: -25.363,
                                    lng: 131.044
                                };
                                var grayStyles = [{
                                        featureType: "all",
                                        stylers: [{
                                                saturation: -90
                                            },
                                            {
                                                lightness: 50
                                            }
                                        ]
                                    },
                                    {
                                        elementType: 'labels.text.fill',
                                        stylers: [{
                                            color: '#ccdee9'
                                        }]
                                    }
                                ];
                                var map = new google.maps.Map(document.getElementById('map'), {
                                    center: {
                                        lat: -31.197,
                                        lng: 150.744
                                    },
                                    zoom: 9,
                                    styles: grayStyles,
                                    scrollwheel: false
                                });
                            }
                        </script>
                        <script
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
                        </script>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="book_Form">
                        <h3>Book a Table</h3>
                        <div class="row ">
                        
                        <div class="col-lg-6">   
                                 <form action="" method="post">                 
                                <div class="input_field mb_15">
                                    <input type="text" placeholder="Your Name" name="name" class="form-group">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input_field mb_15">
                                    <input type="text" placeholder="Phone no." name="phone">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input_field">
                                    <input type="date" placeholder="Date" name="date">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input_field">
                                    <div class="input_field">
                                    <select class="wide" name="category">
                                            <?php 
                                            $category = new Reservation();
                                            $rows = $category->fetch_category();
                                            foreach ($rows as $row){          
                                            ?>
                                            <option value="<?php echo $row['Id'];?>"><?php echo $row['Name'];?></option>
                                        <?php
                                        }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input_field">
                                <div class="input_field">
                                    <select class="wide" name="useraccount">
                                        <?php 
                                        $username = new Reservation();
                                        $username_session = $_SESSION['username'];
                                        $rows = $username->fetch_username($username_session);
                                        foreach($rows as $row){
                                          ?>                                       
                                        <option value="<?php echo $row['id'];?>"><?php echo $row['Username'];?></option>     
                                        <?php 
                                        }
                                        ?> 
                                     </select>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                <input type="submit" class="sumbit_btn" name="submit" value="Book">
                            </div>
                                </form>
                            </div>  
                            <div class="col-lg-6">
                                <div class="single_add d-flex">
                                    <div class="icon">
                                        <img src="img/svg_icon/address.svg" alt="">
                                    </div>
                                    <div class="ifno">
                                        <h4>Address</h4>
                                        <p>20/D, Kings road, Green lane</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single_add d-flex">
                                    <div class="icon">
                                        <img src="img/svg_icon/head.svg" alt="">
                                    </div>
                                    <div class="ifno">
                                        <h4>Reservation</h4>
                                        <p>+10 673 567 367</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>