<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Baju Danus</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/icomoon/icomoon.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Shield
    Template URL: https://templatemag.com/shield-bootstrap-agency-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-offset="58" data-target="#navbar-main">


  <div id="navbar-main">
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
          </button>
          <a class="navbar-brand hidden-xs hidden-sm smoothscroll" href="#home"><span class="icon icon-home" style="font-size:18px; color:#3498db;"></span></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#home" class="smoothscroll">Home</a></li>
            <li> <a href="#about" class="smoothscroll"> About</a></li>
            <li> <a href="#team" class="smoothscroll"> Team</a></li>
            <li> <a href="#contact" class="smoothscroll"> Contact</a></li>
            @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/dashboard') }}" >Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}" >Login</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" >Register</a></li>
                        @endif
                    @endauth
            @endif
        </div>
        
        <!--/.nav-collapse -->
      </div>
    </div>
  </div>

  <!-- ==== HEADERWRAP ==== -->
  <div id="home"></div>
  <div id="headerwrap" name="home">
    <header class="clearfix">
      <p style="margin-top: 250px; font-size: 40px">BAJU DANUS</p>
      <p style="font-size: 25px">Buang Sampah Jadi Uang dan Peluang Usaha</p>
    </header>
  </div>
  <!-- /headerwrap -->

  <!-- ==== GREYWRAP ==== -->
  
  <!-- greywrap -->

  <!-- ==== ABOUT ==== -->
  <div class="container" id="about" name="about">
    <div class="row white">
      <br>
      <h1 class="centered">A LITTLE ABOUT BAJU DANUS</h1>
      <hr>

      <div class="col-lg-offset-2 col-lg-8">
        <p style="text-align: center">Baju Danus has features that are used to access the system in a garbage bank application, namely category, point, sell and community. In addition, this application also provides facilities for people who want to sell their work from processed garbage. </p>
      </br>
    </br>
      </div>
      <!-- col-lg-6 -->
      <!-- col-lg-6 -->
    </div>
    <!-- row -->
  </div>
  <!-- container -->

  <!-- ==== SECTION DIVIDER1 -->
  
  <!-- ==== SECTION DIVIDER2 -->
  <section class="section-divider textdivider divider3">
    <div class="container">
      <h1>SERVE THE COMMUNITY</h1>
      <hr>
      <p>This application is made with the goal of keeping the public aware of the benefits of garbage, so that they can make the best possible.</p>
    </div>
    <!-- container -->
  </section>
  <!-- section -->

  <!-- ==== TEAM MEMBERS ==== -->
  <div class="container" id="team" name="team">
    <br>
    <div class="row white centered">
      <h1 class="centered">MEET OUR AWESOME TEAM</h1>
      <hr>
      <br>
      <br>
      <div class="col-lg-3 centered">
        <img class="img img-circle" src="img/team/team05.jpg" height="120px" width="120px" alt="">
        <br>
        <h4><b>Fajar Bayu</b></h4>
        <a href="#" class="icon icon-twitter"></a>
        <a href="#" class="icon icon-facebook"></a>
        <a href="#" class="icon icon-flickr"></a>
        <p style="text-align: left">Fajar combines an expert technical knowledge with a real eye for design. Working with clients from a wide range of industries, he fully understands client objectives when working on a project, large or small.</p>
      </div>
      <!-- col-lg-3 -->

      <div class="col-lg-3 centered">
        <img class="img img-circle" src="img/team/team08.jpg" height="120px" width="120px" alt="">
        <br>
        <h4><b>Septiya Kristin</b></h4>
        <a href="#" class="icon icon-twitter"></a>
        <a href="#" class="icon icon-facebook"></a>
        <a href="#" class="icon icon-flickr"></a>
        <p style="text-align: left">Septiya is an experienced marcoms practitioner and manages projects from inception to delivery. She understands the synergy between great design and commercial effectiveness which shines through on every project.</p>
      </div>
      <!-- col-lg-3 -->

      <div class="col-lg-3 centered">
        <img class="img img-circle" src="img/team/team06.jpeg" height="120px" width="120px" alt="">
        <br>
        <h4><b>Azzahra Pramata</b></h4>
        <a href="#" class="icon icon-twitter"></a>
        <a href="#" class="icon icon-facebook"></a>
        <a href="#" class="icon icon-flickr"></a>
        <p style="text-align: left">Be a creative director is a hard task, but Rara loves what she does. Her combination of knowledge and expertise is an important pillar in our agency.</p>
      </div>
      <!-- col-lg-3 -->

      <div class="col-lg-3 centered">
        <img class="img img-circle" src="img/team/team07.jpeg" height="120px" width="120px" alt="">
        <br>
        <h4><b>Zulvia Eggy</b></h4>
        <a href="#" class="icon icon-twitter"></a>
        <a href="#" class="icon icon-facebook"></a>
        <a href="#" class="icon icon-flickr"></a>
        <p style="text-align: left">Eggy began making websites when animated logos and scrolling text were cool, but has since found a love for simplicity, creating websites that are a pleasure to browse. Monkey Island Fan.</p>
      </div>
      <!-- col-lg-3 -->

    </div>
    <!-- row -->
  </div>
  <!-- container -->

  <!-- ==== GREYWRAP ==== -->
  <div id="greywrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 centered">
          <img class="img-responsive" src="img/macbook.png" align="">
        </div>
        <div class="col-lg-4">
          <h2>We Are Hiring!</h2>
          <p>Do you want to be one of use? Sure you want, because we are an awesome team!. Here we work hard every day to craft pixel perfect sites.</p>
          <p><a class="btn btn-success">Contact Us</a></p>
        </div>
      </div>
      <!-- row -->
    </div>
    <br>
    <br>
  </div>
  <!-- greywrap -->

  <!-- ==== SECTION DIVIDER3 -->
  
  <!-- section -->

  <!-- ==== PORTFOLIO ==== -->
  
  <!-- /container -->

  <!-- ==== SECTION DIVIDER6 ==== -->
  <section class="section-divider textdivider divider6">
    <div class="container">
      <h1>CRAFTED IN YOGYAKARTA, INA.</h1>
      <hr>
      <p>Jalan Mangga No.29C, Karanggayam</p>
      <p>+62 838 9771 0862</p>
      
    </div>
    <!-- container -->
  </section>
  <!-- section -->

  <div class="container" id="contact" name="contact">
    <div class="row">
      <br>
      <h1 class="centered">THANKS FOR VISITING US</h1>
      <hr>
      <br>
      <br>

      <div class="col-lg-4">
        <h3>About Us</h3>
        <p>We are students of the Computer Science Vocational School of Gadjah Mada University 2017.</p>
        
      </div>
      <!-- col -->

      <div class="col-lg-3">
        <h3>Contact Information</h3>
        <p><span class="icon icon-home"></span> Jalan Mangga No.29C, Karanggayam, Yogyakarta<br/>
          <span class="icon icon-mobile"></span> +62 838 9771 0862 <br/>
          <span class="icon icon-envelop"></span> <a href="#"> bajudanus@gmail.com</a> <br/>
          <span class="icon icon-twitter"></span> <a href="#"> @bajudanus </a> <br/>
          <span class="icon icon-facebook"></span> <a href="#"> BajuDanus </a> <br/>
        </p>
      </div>
      <!-- col -->

      <div class="col-lg-5">
        <h3>Contact Form</h3>
        <p>Register to our newsletter and be updated with the latests information.</p>
        <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

            <div class="form-group">
              <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
              <div class="validate"></div>
            </div>

            <div class="form-group">
              <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>

            <div class="loading"></div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <div class="form-send">
              <button type="submit" class="btn btn-large">Send Message</button>
            </div>

          </form>
      </div>
      <!-- col -->

    </div>
    <!-- row -->

  </div>
  <!-- container -->


<div id="copyrights">
  <div class="container">
    <p>
      &copy; Copyrights <strong>Shield</strong>. All Rights Reserved
    </p>
    <div class="credits">
      <!--
        You are NOT allowed to delete the credit link to TemplateMag with free version.
        You can delete the credit link only if you bought the pro version.
        Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/shield-bootstrap-agency-template/
        Licensing information: https://templatemag.com/license/
      -->
      Created with Shield template by <a href="https://templatemag.com/">TemplateMag</a>
    </div>
  </div>
</div>
<!-- / copyrights -->

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/php-mail-form/validate.js"></script>
<script src="lib/easing/easing.min.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>

</body>
</html>
