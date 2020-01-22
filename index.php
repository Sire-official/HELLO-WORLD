<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="Keywords" content="area,best,clean't op,clean,cleaner,exterminators,fumigation,janitors,portharcourt,port-harcourt,home cleaning,office cleaning,poultry cleaning,sanitation,pool management,pest control,couch cleaning,restroom cleaning">
  <meta name="Description" content="Clean'T Op services,the best janitors and exterminators in the area,about Clean'T Op">
  <title>Clean'T Op</title>
  
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap3/fa/css/font-awesome.min.css">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet" />
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="index1.css">
   <link rel="icon" href="caution.jpg">
  </head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container"> 
      <div class="row">
        <div class="site-logo">
        <a class="navbar-brand wow fadeInDown" href="index.php"><span style="color:red">Clean'T Op <i class="fa fa-black-tie"></i></span></a>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button"style="position:absolute;top:40px;right:20px;border:none;color:red"class="navbar-toggle" data-toggle="collapse" data-target="#menu">
            <i class="fa fa-bars"></i>
          </button>
        </div>
        <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title text-danger" id="exampleModalLabel"><b>Details we would need</b></h4>
            <button type="button" class="close" style="position:relative;top:-27px;" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
    <?php
    if(isset($_SESSION['msg'])){
      echo $_SESSION['msg'];
    }
    ?>
          <form role="form" action="post.php" method="post">
            
      <div class="form-group">
        <label for="First Name">Full Name:</label>
         <div class="input-group">
          <span class="input-group-addon">
            <span class="glyphicon glyphicon-user"></span>
          </span>
          <input type="text" required class="form-control" name="name">
         </div></div>
         <div class="form-group">
        <label for="email">Email:</label>
         <div class="input-group">
          <span class="input-group-addon">
            <span class="glyphicon glyphicon-envelope"></span>
          </span>
          <input type="email" required class="form-control"  name="email">
         </div></div>
         <div class="form-group">
        <label for="Address">Where do we go?(address):</label>
         <div class="input-group">
          <span class="input-group-addon">
            <span class="glyphicon glyphicon-map-marker"></span>
          </span>
          <input type="text" required class="form-control"  name="address">
         </div></div>
         <div class="form-group">
        <label for="Phone">Phone Number:</label>
         <div class="input-group">
          <span class="input-group-addon">
            <span class="glyphicon glyphicon-phone"></span>
          </span>
          <input type="text"  required minlength="11" maxlength="14" class="form-control"  name="num">
         </div></div>
         <label for="Description">Description:</label>
         <select class="form-control" name="description">
           <option value="Full home">Full Home</option>
           <option value="Restroom">Restroom</option>
           <option value="Pool management">Pool Management</option>
           <option value="mowing/Grasscutting">Mowing/Grasscutting</option>
           <option value="Couch Cleaning">Couch Cleaning</option>
           <option value="Official Residence">Official Residence</option>
         </select><br>
      <button type="submit" class="btn btn-danger btn-lg">Submit</button>
    </form>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div>
  
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="menu">
          <ul class="nav navbar-nav navbar-right wow fadeInDown">
            <li><a href="#home">Home <span class="glyphicon glyphicon-home"></span></a></li>
            <li><a title="Book" href="#" data-toggle="modal" data-target="#form">Book Appointment <span class="glyphicon glyphicon-check"></span></a></li>
            <li><a href="#about" title="About Clean'T Op">About Us <span class="glyphicon glyphicon-info-sign"></span></a></li>
            <li><a href="#features" title="Features">Description<span class="glyphicon glyphicon-book"></span></a></li>
            <li><a href="#contact">Contact Us <span class="glyphicon glyphicon-phone"></span></a></li>
          </ul>
        </div>
        <!-- /.Navbar-collapse -->
      </div>
    </div>
  </nav>

  <div id="home">
    <div class="wel" style="display:none">
    <h3 class="h1 wow fadeInRight">Welcome on <span style="color:red">Clean'T Op</span></h3>
    </div>
    <div class="slider">
      <div id="about-slider">
        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators visible-xs">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
            <li data-target="#carousel-slider" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner">
            <div class="item active">
              <img src="images/clean.jpg"class="img-responsive" style="height:500px" alt="">
            </div>
            <div class="item">
              <img src="images/clean2.jpg"class="img-responsive"style="height:500px" alt="">
            </div>
            <div class="item">
              <img src="images/cleaner.jpg"class="img-responsive"style="height:500px" alt="">
            </div>
          </div>
          <h3 class="h wow fadeInUp">Welcome on <span style="color:red">Clean'T Op</span></h3>
          <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
            <i style="background-color:red!important;border-color:red" class="fa fa-angle-left"></i>
          </a>
          
          <a class="right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
            <i style="background-color:red!important;border-color:red" class="fa fa-angle-right"></i>
          </a>
        </div>
        <!--/#carousel-slider-->
      </div>
      <!--/#about-slider-->
    </div>
  </div>

  <section id="about">
    <div class="container">
      <div class="center">
        <div class="col-md-6 col-md-offset-3">
          <h2>About Us</h2>
          <hr>
          <p class="lead">Find out more about <span style="color:red">Clean'T Op</span> the best janitors and exterminators in the area at your service</p>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-6 wow fadeInRight">
          <img src="images/clean8.jpeg" class="img-responsive" />
          <p class="wow fadeInLeft"><b>We offer a wide range of cleaning Services, more like all types of cleaning services</b></p>

        </div>
    
        <div class="col-sm-6 wow fadeInDown">
          <div class="accordion">
            <div class="panel-group" id="accordion1">
              <div class="panel panel-default">
                <div class="panel-heading active">
                  <h3 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                    FULL HOME CLEANING
                      <i style="background:red"class="fa fa-angle-right pull-right"></i>
                    </a>
                  </h3>
                </div>

                <div id="collapseOne1" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <div class="media accordion-inner">
                      <div class="pull-left">
                        <img class="img-responsive" src="images/home.jpeg">
                      </div>
                      <div class="media-body">
                      <ul class="wow fadeInLeft">
                <li>Post Construction/Renovation Cleaning</li>
                <li>End of Tenacy Cleaning</li>
                <li>Home Sanitation</li>
                <li style="margin-right:40px" class="list-group-item list-group-item-danger"><b>Payable - &#8358;00000</b></li>
                </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                    COUCH CLEANING/UPHOLSTERY
                      <i style="background:red"class="fa fa-angle-right pull-right"></i>
                    </a>
                  </h3>
                </div>
                <div id="collapseTwo1" class="panel-collapse collapse">
                  <div class="panel-body">
                  <div class="media accordion-inner">
                      <div class="pull-left">
                        <img class="img-responsive" src="images/couch.png">
                      </div>
                      <div class="media-body">
                 <ul class="wow fadeInLeft">
                <li>Carpet/Rug Cleaning</li>
                <li>Leather Cleaning</li>
                <li>Couch Cleaning</li>
                <li style="margin-right:40px" class="list-group-item list-group-item-danger"><b>Payable - &#8358;00000</b></li>
                </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                    POOL MANAGEMENT
                    <i style="background:red"class="fa fa-angle-right pull-right"></i>
                    </a>
                  </h3>
                </div>
                <div id="collapseThree1" class="panel-collapse collapse">
                  <div class="panel-body">
                  <div class="media accordion-inner">
                      <div class="pull-left">
                        <img class="img-responsive" src="images/pool1.jpg">
                      </div>
                      <div class="media-body">
                <ul class="wow fadeInLeft">
                <li>Pool Cleaning</li>
                <li>Pool Treatment</li>
                <li>Pool Maintenance</li>
                <li style="margin-right:40px" class="list-group-item list-group-item-danger"><b>Payable - &#8358;00000</b></li>
                </ul>
                 </div>
                 </div>
                 </div>
                </div>
              </div>

              <div class="panel panel-default"> 
              <div class="panel-heading">
                  <h3 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                    RESTROOM CLEANING
                      <i style="background:red"class="fa fa-angle-right pull-right"></i>
                    </a>
                  </h3>
                </div>
                <div id="collapseFour1" class="panel-collapse collapse">
                  <div class="panel-body">
                  <div class="media accordion-inner">
                      <div class="pull-left">
                        <img class="img-responsive" src="images/clean1.jpg">
                      </div>
                      <div class="media-body">
                 <ul class="wow fadeInLeft">
                <li>Bathroom Cleaning</li>
                <li>Bathtub Polishing</li>
                <li>Toilet Cleaning</li>
                <li style="margin-right:40px" class="list-group-item list-group-item-danger"><b>Payable - &#8358;00000</b></li>
                </ul> 
                </div>
                </div>
                </div>
              </div>
              </div>

              
              <div class="panel panel-default"> 
              <div class="panel-heading">
                  <h3 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFive1">
                    OFFICE CLEANING
                      <i style="background:red"class="fa fa-angle-right pull-right"></i>
                    </a>
                  </h3>
                </div>
                <div id="collapseFive1" class="panel-collapse collapse">
                  <div class="panel-body">
                  <div class="media accordion-inner">
                      <div class="pull-left">
                        <img class="img-responsive" src="images/office.jpeg">
                      </div>
                      <div class="media-body">
                <ul class="wow fadeInLeft">
                <li>Commercial Residential Cleaning</li>
                <li>Office Sanitation</li>
                <li>Shop/business Infrastucture Cleaning</li>
                <li style="margin-right:40px" class="list-group-item list-group-item-danger"><b>Payable - &#8358;00000</b></li>
                </ul> 
                </div>
                </div>
                </div>
                </div>
              </div>

  <div class="panel panel-default"> 
              <div class="panel-heading">
                  <h3 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseSix1">
                    PEST/RODENT CONTROL
                      <i style="background:red"class="fa fa-angle-right pull-right"></i>
                    </a>
                  </h3>
                </div>
                <div id="collapseSix1" class="panel-collapse collapse">
                  <div class="panel-body">
                  <div class="media accordion-inner">
                      <div class="pull-left">
                        <img class="img-responsive" src="pest1.png">
                      </div>
                      <div class="media-body">
                <ul class="wow fadeInLeft">
                <li>Fumigation</li>
                <li>Rodent Removal</li>
                <li>Pest Removal</li>
                <li style="margin-right:40px" class="list-group-item list-group-item-danger"><b>Payable - &#8358;00000</b></li>
                </ul> 
                </div>
                </div>
                </div>
                </div>
              </div>


              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseSeven1">
                    LANDSCAPING/GARDENING
                      <i style="background:red"class="fa fa-angle-right pull-right"></i>
                    </a>
                  </h3>
                </div>
                <div id="collapseSeven1" class="panel-collapse collapse">
                  <div class="panel-body">
                  <div class="media accordion-inner">
                      <div class="pull-left">
                        <img class="img-responsive" src="images/grass.jpg">
                      </div>
                      <div class="media-body">
                <ul class="wow fadeInLeft">
                <li>Lawn Maintenance</li>
                <li>Weeding/Grass Trimming</li>
                <li>Garden Maintenance</li>
                <li style="margin-right:40px" class="list-group-item list-group-item-danger"><b>Payable - &#8358;00000</b></li>
                </ul> 
                </div>
                </div>
                </div>
              </div>
            </div>
          
            <!--/#accordion1-->
          </div>
        </div>

      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  <!--/#about-->

  
  <section id="features">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="center">
          <div class="col-md-12">
            <h2>OUR CORE VALUES</h2>
            <hr>
            <p class="lead">At <span style="color:red">Clean'T Op</span> 
            we guarantee 100% satisfaction and we work with a certain standard</p>
          </div>
        </div>
          <img src="images/clean4.jpg" height="200px" alt="">
          <p>
         <ul style="font-size:20px">
             <li>Excellence</li>
             <li>Intergrity</li>
             <li>Intergrity</li>
             <li>Professionalism</li>
             <li>Innovation</li>
             <li>Speed</li>
         </ul>
        </p>
        </div>
      </div>
    </div>
  </section>
 <section id="contact">
    <div class="contact-page">
      <div class="container">
        <div class="center">
          <h2>Contact Us</h2>
        </div>
        <div id="info">
    <div class="row text-center">
    <div class="col-md-4">
      <div class="address box">
      <span class="glyphicon glyphicon-map-marker tap"></span>
      <h4>ADDRESS</h4>
      <p><b>Rukpokwu, Port-Harcourt Rivers State</b></p>
    </div>
    </div>
    <div class="col-md-4">
    <div class="phone box"> 
    <span class="glyphicon glyphicon-phone tap"></span>
    <h4>PHONE NUMBER</h4>
     <p><b>08077964414  08033369822</b></p>
    </div>
</div>
<div class="col-md-4">
    <div class="email box">
    <span class="glyphicon glyphicon-envelope tap"></span>
        <h4>EMAIL</h4>
        <p><b>luckyechem@yahoo.com</b></p>
    </div>
</div>
    </div>
    </div>
        <div class="row contact-wrap">
          <div class="col-md-8 col-md-offset-2">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="postmail.php" method="post" role="form" class="contactForm">
            <?php 
    if(isset($_SESSION['msg']) && !empty($_SESSION['msg'])){
        echo $_SESSION['msg'];
    }
    ?>
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4"
                  data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email"
                  data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4"
                  data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"
                  placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <div class="text-center"><button type="submit" class="btn btn-danger btn-lg">Send Message</button></div>
            </form>
          </div>
        </div>
        <!--/.row-->
      </div>
      <!--/.container-->
    </div>
    <!--/#contact-page-->
  </section>

  <footer id="footer" class="midnight-blue" style="background:red">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="text-center">
            <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
          </div>
          <b>&copy;Clean'T Op2019. All Rights Reserved.</b>
          <div class="credits">
           <b> Designed by <a href="twitter.com/@sire_official">SIRE(@sire_official)</a></b>
          </div>
        </div>

        <div class="top-bar">
          <div class="col-lg-12">
            <div class="social">
              <ul class="social-share">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/#footer-->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/main.js"></script>
  <script src="contactform/contactform.js"></script>
  <script>
$('.carousel').carousel({
  interval: 2000
});
</script>
</body>
</html>
<?php if(isset($_SESSION['msg'])): ?>
<!-- <script>
$("#form").modal("show");
</script> -->
<?php  endif; ?>
<?php
session_destroy();
?>