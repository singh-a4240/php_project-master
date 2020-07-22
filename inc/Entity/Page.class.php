<?php
class Page  {

    public static $title = "Please set your title!";

    static function header()   { ?>
        <!-- Start the page 'header' -->
       
<html lang="en">
<head>
<meta charset="utf-8">
<title>The Douglas Hospital</title>

<script type="text/javascript" src="js/jquery-lib.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/popper.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">
</head>
<body>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand"><img src="pics/logo.png" height=80px; width = 80px;></a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#"><h1>The Douglas Hospital <h1></a>
        </li>
      </ul>
      <div style="background-color:white;padding:5px;border-radius:5px;margin-left:5px;"><button type="button" data-toggle="modal" data-target="#SignUpModal" class="btn btn-primary">Sign Up</button></div>
      <div style="background-color:white;padding:5px;border-radius:5px;margin-left:5px;"><button type="button" data-toggle="modal" data-target="#LogInModal" class="btn btn-primary">Login</button></div>
    </div>
  </nav>
</header>

<main role="main">
    <?php }

    static function footer()   { ?>
        <!-- Start the page's footer -->   
        <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2020 The Douglas Hospital, Inc. &middot;</p>
  </footer>         
        </body>

</html>

    <?php }

    static function body()    {
    ?>
        
            <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Pics/carousel1.jpg" class="d-block w-100"  height="450">
                    </div>
                    <div class="carousel-item">
                        <img src="Pics/carousel2.jpg" class="d-block w-100" height="450">
                    </div>
                    <div class="carousel-item">
                        <img src="Pics/carousel3.jpg" class="d-block w-100"  height="450">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                 </a>
             </div>     
       <div class="container marketing" style="padding-top:50px;">
    <!-- Four columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-3">
        <img src="pics/researcher.jpg" width="140" height="140" class="bd-placeholder-img rounded-circle" >
        <h2>Tho Quen Ngo</h2>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
        <p><a class="btn btn-secondary" href="#" role="button">More details &raquo;</a></p>
      </div>
      <div class="col-lg-3">
        <img src="pics/Veer Yuvraj Singh.jpeg" width="140" height="140" class="bd-placeholder-img rounded-circle" >
        <h2>Veer Yuvraj Singh</h2>
        <p>Dr. Veer Singh is a member of the executives of the hospital. He completed his Bachelor of Science (Computer Science) from University of British Columbia. Followed by 4 years of Md/Phd at UBC Medical School and is contributing in this hospital since then.</p>
        <p><a class="btn btn-secondary" href="https://www.linkedin.com/in/veeryuvrajsingh/" role="button">More Details&raquo;</a></p>
      </div>
      <div class="col-lg-3">
        <img src="pics/researcher.jpg" width="140" height="140" class="bd-placeholder-img rounded-circle" >
        <h2>Dilpreet Sandhu</h2>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
        <p><a class="btn btn-secondary" href="#" role="button">More Details&raquo;</a></p>
      </div>
      <div class="col-lg-3">
        <img src="pics/researcher.jpg" width="140" height="140" class="bd-placeholder-img rounded-circle" >
        <h2>Avneet Singh</h2>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
        <p><a class="btn btn-secondary" href="#" role="button">More Details &raquo;</a></p>
      </div>
    </div>


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Covid 19 Vaccine Found <span class="text-muted">Pandemic will soon be over</span></h2>
        <p class="lead">After months of researching and testing. The Medical Researchers team led by Dr. Theresa Tam has found a cure and vaccine to the novel Coronavirus. It can  eradicate the virus from earth within a few days of successful execution.</p>
      </div>
      <div class="col-md-5">
       <img src="pics/researcher.jpg" width="500" height="500" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" >
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Advancement in Carcenogenic Drugs <span class="text-muted">3rd Stage Cancer can be healed</span></h2>
        <p class="lead">It seemed to be impossible to look at cancer as an ailment that can't be healed. But the doctors and researchers at douglas hospital have developed an advanced version of carcenogenic drugs which can have positive effects on 3rd stage cancer.</p>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="pics/cancer.jpg" width="500" height="500" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" >
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Do What You Are Good At <span class="text-muted">Douglas Hospital is hiring a variety of doctors</span></h2>
        <p class="lead">Douglas Hospital has been the top healthcare providing institution from the past 75 years. There are more than 100+ specilaties available in douglas hospital. Put your best skills to practise and checkout the douglascareer website now. </p>
      </div>
      <div class="col-md-5">
      <img src="pics/hospital.jpg" width="500" height="500" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" >
      </div>
    </div>

    <hr class="featurette-divider">

  </div>


  <?php }

static function signupform()   {  ?>
<!-- SignUpModal -->
<form action="" method="POST">
    <div class="modal fade" id="SignUpModal" tabindex="-1" role="dialog" aria-labelledby="ProfileModal" aria-hidden="true" style="width:1500px; margin-left:70px; ">
        <div class="modal-dialog" role="document" style="width:500px;">
            <div class="modal-content" style="width:500px; border-radius:30px; border:4px red solid;">
                <div class="modal-body" style="width:500px; padding:0px; border-radius:30px; margin-bottom:0px;">
                    <div class="form-row" style="margin-left:0px;margin-right:30px;">
                        <div class="form-group col-md-12 mt-2" style="padding-left:40px;padding-right:10px;">
                            <h2>
                                <center>Patient Signup
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button></center>
                            </h2><br>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <input type="text" id="UID" name="UID" placeholder="UserID" autofocus>
                                    <span id="errUID"> &nbsp;</span>
                                    <input type="password" id="Password" name="Password" placeholder="Password" style="margin-top:0px;">
                                </div>

                            </div>
                            <div class="form-row" style="margin-top:8px;">
                                <div class="form-group col-md-12">
                                    <input type="text" name="name" id="Contact" placeholder="Name">&nbsp;
                                    <input type="text" id="Contact" name="email" placeholder="Email" >
                                    </div>
                            </div>
                            <div class="form-row" style="margin-top:8px;">
                                <div class="form-group col-md-12">
                                    <input type="text" name="address" id="Contact" placeholder="Address">&nbsp;
                                    <input type="text" id="Contact" name="phoneNumber" placeholder="Phone Number" >
                            </div>
                            </div>
                            <div class="form-row mt-4">
                                <div class="form-group col-md-12">
                          <input type="submit" value="Sign Up">                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
    <?php }

    static function loginform()   {  ?>        
        
    <!-- LogInModal ---------------------------------------------------------------------------------->
<form action="" >
    <div class="modal fade" id="LogInModal" tabindex="-1" role="dialog" aria-labelledby="ProfileModal" aria-hidden="true" style="width:1500px; margin-left:70px; ">
        <div class="modal-dialog" role="document" style="width:500px;">
            <div class="modal-content" style="width:500px; border-radius:30px; border:4px red solid;">
                <div class="modal-body" style="width:500px; padding:0px; border-radius:30px; margin-bottom:0px;">
                    <div class="form-row" style="margin-left:0px;margin-right:30px;">
                        <div class="form-group col-md-12 mt-2" style="padding-left:40px;padding-right:10px;">
                            <h2>
                                <center>USER LOGIN
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button></center>
                            </h2><br>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <input type="text" id="LUID" name="LUID" placeholder="UserID" autofocus>
                                    <span id="errLUID"> &nbsp;</span>
                                    <input type="password" id="LPassword" name="LPassword" placeholder="Password" style="margin-top:0px;">
                                </div>
                            </div>
                            <div class="form-row mt-4">
                                <div class="form-group col-md-12">
                                    <center><input type="submit" class="btn btn-primary" id="LogIn" name="LogIn">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>

<?php }

}