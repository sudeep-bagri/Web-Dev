<?php
session_start(); //start session
require_once 'Core/init.php'; //include init (db connector)
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Delicious Delivery App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta charset="UTF-8"/>

        <script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
       
        <!--font-awsome-css-->
        <link rel="stylesheet" href="css/font-awesome.min.css"> 
        <!--bootstrap-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!--custom css-->
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/percircle.css">
        <!--component-css-->
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
      
        <!--script-->
        <script src="js/modernizr.custom.js"></script>
        <script src="js/bigSlide.js"></script>
        <script>
            $(document).ready(function() {
                $('.menu-link').bigSlide();
            });
        </script>
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){		
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
                });
            });
        </script>

        <!--script-->
        <!-- i[ipe box js -->
        <link rel="stylesheet" href="css/swipebox.css">
        <script src="js/jquery.swipebox.min.js"></script> 
        <script type="text/javascript">
            jQuery(function($) {
                $(".swipebox").swipebox();
            });
        </script>
        <!-- //swipe box js -->


        <!--script-->
        <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="body-back">
            <div class="masthead pdng-stn1">





                <!--Left side of the fucking profile-->
                <div id="menu" class="panel" role="navigation">
                    <div class="wrap-content">
                        <div class="profile-menu text-center">
                            <img class="img-circle border-effect" src="images/userprofile.png" alt=" ">
                            <h3>User</h3>
                            <p>User Rank</p>
                            <div class="pro-menu">
                                <div class="logo">
                                    <li><a class=" link link--yaku scroll active" href="#home">
                                        <span>Home</span></a></li>
                                    <li><a class=" link link--yaku scroll" href="#about">
                                        <span>Settings</span></a></li>
                                    <li><a class=" link link--yaku scroll" href="#service">
                                        <span>Privacy</span></a></li>
                                    <li><a class=" link link--yaku scroll" href="#recipes">
                                        <span>Our</span> <span>Participants</span></a></li>
                                    <li><a class=" link link--yaku scroll" href="#gallery">
                                        <span>FAQ</span></a></li>
                                    <li><a class=" link link--yaku scroll" href="#contact">
                                        <span>Contact</span> <span>us</span></a></li>
                                </div>  <!--  close logo -->
                            </div>      <!--  close pro menu -->
                        </div>          <!--  close profile menu  -->
                    </div>              <!--  close wrapper content -->
                </div>                  <!--  close menu -->


                <!-- the top bar-->


                <div class="phone-box wrap push" id="home">
                    <div class="menu-notify">
                        <div class="profile-left">
                            <a href="#menu" class="menu-link"><i class="fa fa-list-ul"></i></a>
                        </div>
                        <div class="Profile-mid">
                            <h5 class="pro-link">McDonald</h5>
                        </div>
                        <div class="Profile-right">
                            <div id="dd1" class="wrapper-dropdown-1" tabindex="1"><i class="fa fa-user"></i>








                                <!-- the right part-->

                                
                                <ul class="dropdown">
                                    <li><a href="#">Edit Profile </a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Activity log</a></li>
                                    <li><a href="login.php">Log In</a></li>
                                    <li><a href="#">Log Out</a></li>
                                    <li><a href="register.php">Register</a></li>
                                </ul>
                                <script type="text/javascript">
                                    function DropDown(el) {
                                        this.dd = el;
                                        this.initEvents();
                                    }
                                    DropDown.prototype = {
                                        initEvents : function() {
                                            var obj = this;

                                            obj.dd.on('click', function(event){
                                                $(this).toggleClass('active');
                                                event.stopPropagation();
                                            });	
                                        }
                                    }
                                    $(function() {

                                        var dd = new DropDown( $('#dd1') );

                                        $(document).click(function() {
                                            // all dropdowns
                                            $('.wrapper-dropdown-1').removeClass('active');
                                        });

                                    });
                                </script>
                            </div> <!--  wrapper dropdown-1 -->
                        </div> <!--  close profile right -->
                        <div class="clearfix"></div>
                    </div> <!--  close menu notify -->
                </div>


<!-- upper content of the homepage-->

                    
                    
                    
                    
                    
                    <div class="details-grid">
                        <div class="details-shade">
                            <div class="details-right">
                                <img src="images/logo.png" alt=" " />
                                <h3>Delicious Delivery App</h3>
                                <h4>Delicious food to your door!</h4>

                                <!--Search bar-->
                             <!--  close details right -->
     

                                <!--Search bar-->
                            </div> <!--  close details right -->
                            <div class="banner_search">
                                <form action ="search.php" method = "GET">
                                    <input type="search" results = 10 name="search"   placeholder = "What will satisfy your craving?"required="">
                                     
                                    
                                </form>
                             </div> 
                        </div>
                </div>
                        
                                 <div class="goals">


                        <div class="rests" id="rests">
                            <h3>Hungry?</h3>
                            <h3></h3>
                            <div class="col-sm-6 goal-left rest">
                               
                                <div class="goal-info">
                                   <?php
if(isset($_GET['search'])){
                                $key = $_GET['search'];
                                $terms = explode(" ", $key);
                                $query = "SELECT * FROM products_list WHERE product_keywords LIKE '%$key%' ";
                                $result = $db_con->query($query);
                          while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                              ?>
                                        <h4><?php echo htmlspecialchars($row['product_name']);?></h4>
                                       
                                       <p><?php echo htmlspecialchars($row['product_price']); ?></p>
                                    <?php
}
};

?>
                                    
                                    
                                    
                                </div>
                                <div class="clearfix"></div>
                            </div>
                           <div class="clearfix"></div>

                    </div>
                                
                                
                           
                            


                        <!--  close details shade -->
                    </div> <!--  close details grid -->
        </div>
        </div>
        
    </body>
</html>
