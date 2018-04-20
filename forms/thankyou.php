<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Contact</title>

    <!-- Bootstrap -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link href="../css/animate.min.css" rel="stylesheet">
	<link href="../css/animate.css" rel="stylesheet" />
	<link href="../css/prettyPhoto.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
 <body id="toTop">
  <div class="example3">
    <nav class="navbar navbar-default " style="min-height:20px; position: relative;">
      <!-- navbar-fixed-top || add this to make the bar sticky = this is faulty atm -->
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3" style="">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
          <div class="site-logo">
            <!-- <a href="index.html" class="brand">Phil's Auto Body Repairs</a> -->
            <a class="navbar-brand3" href="../index.html"><img src="../newimages/Main Logo.png" style="height:80px;width:200px; margin: -20px 20px 0px;" alt=""></a>
          </div>
          <!--<a class="navbar-brand3" href="#"><img src="newimages/MainLogo.png" style="height:75px;width:200px" alt="Dispute Bills">-->
        </div>
        <div id="navbar3" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../index.html">Home</a></li>
            <li><a href="../portfolio.html">Portfolio</a></li>
            <li><a href="../faqs.html">FAQ</a></li>
            <li class="active"><a href="../Contact.html">Contact</a></li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
      <!--/.container-fluid -->
    </nav>
  </div>

       <!-- Bootstrap core CSS -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">

  <div style="background-image: url(../assets/images/background/abstract_bg.jpg); background-repeat:no-repeat;background-size: cover;">

	  <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Contact Us
      </h1>


      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
        	<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9600.222549784703!2d-2.162697!3d53.0193628!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf71cacd87e94d7fc!2sAuto+Body+Repair+Centre!5e0!3m2!1sen!2suk!4v1518719749494"></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <p>612 Leek Road, Hanley
           <br>Stoke-on Trent<br>
		   Staffordshire ST1 3NQ <br>
          </p>
          <p>
            <abbr title="Phone">T</abbr>: 01782 279475
          </p>
          <p>
            <abbr title="Email">E</abbr>:
            <a href="mailto:philsautobodyrepairs@live.com">philsautobodyrepairs@live.com
            </a>
          </p>
		  <p>
		              <abbr title="Web">Web</abbr>: www.philautobodyrepairs.com
					  </p>


          <p>
            <abbr title="Hours"><b>Opening Hours</b></abbr>:
<br>			Monday - Friday: 8:30 AM to 5:30 PM
			<br> Saturday: 8.30 AM to 12:30 PM
          </p>
        </div>
      </div>
      <!-- /.row -->

	<!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Send us an Enquiry</h3>
          <form action="../forms/mailer.php" method="post" name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" name="name" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" name="phone" id="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="10" cols="100" class="form-control" name="message" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
			
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
			<p></p>

          </form>
        </div>

      </div>
</div>

	


      <footer id="footer" class="midnight-blue">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
              <div class="text-center">
                <a href="#toTop" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
              </div>
                        &copy; 2018 <a target="_blank" title="Copy">DJRW Websites</a>. All Rights Reserved.
                        <!--
                            All links in the footer should remain intact.
                            Licenseing information is available at: http://bootstraptaste.com/license/
                            You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=OnePage
                        -->
                    </div>


            <div class="top-bar">
              <div class="col-lg-12">
                 <div class="social">
                  <ul class="social-share">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/PhilsAutoBodys"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/phils_auto_body_repairs/"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                 </div>
              </div>
            </div>
          </div>
        </div>
        </footer><!--/#footer-->
</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="../js/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/jquery.isotope.min.js"></script>
	<script src="../js/wow.min.js"></script>
	<script src="../js/jquery.easing.min.js"></script>
	<script src="../js/main.js"></script>
  </body>
</html>
