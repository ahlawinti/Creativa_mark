<?php 
session_start();
if (!isset($_SESSION['itemscount'])) {
    $_SESSION['itemscount'] = 0;
}
if (!isset($_SESSION['itemsstored'])) {
    $_SESSION['itemsstored'] =  array();
    }


require 'database.php'; ?>


<!DOCTYPE html>
<html>

<head>

    <title>Creativa Services</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>


<body id="front-body">
    <?php require 'header.php' ?>


    <div class="container-fluid">
        <div class="row">

            <div class="col-xs-2 col-md-2 a">

                <?php  require'menusidebar.php'; ?>
            </div>
            
            <?php require'modals.php';  ?>

            <div id="content" >

                <div class="row">
                    <div class=" col-xs-12 col-md-6  logger1"><br>
                        <div class="col-lg-8 col-lg-offset-2"><h2 style="text-align:center">Send us a Message</h2><br><br>
                            <form name="sentMessage" id="contactForm" method="post" action="mailto:manai.elye2s@gmail.com">
                                <div class="control-group form-group">
                                    <div class="controls">
                                        <label>Full Name:</label>
                                        <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                                <div class="control-group form-group">
                                    <div class="controls">
                                        <label>Phone Number:</label>
                                        <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                                <div class="control-group form-group">
                                    <div class="controls">
                                        <label>Email Address:</label>
                                        <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                                <div class="control-group form-group">
                                    <div class="controls">
                                        <label>Message:</label>
                                        <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                                <div id="success"></div>
                                
                                <button type="submit" class="btn btn-primary" style="margin-left: 38%;background: #0EA894;">Send Message</button><br><br>
                            </form>
                        </div>    
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <h2 style="text-align: center;">Contact Info</h2><br><br>
                        <h3>Address:</h3><p> UK London, Southampton S14LB5</p>
                        <h3>Mobile:</h3><p> +995 99 22 45 45 / +995 99 14 54 44</p>
                        <h3>Mail:</h3><p> creativaspace@gmail.com</p>
                        <h3>Website:</h3><p> creativaspace.com</p>
                        <h3>Support: </h3><p>We offer 24/7 support</p>
                        <p>This page is created with inbuilt Contact Page Template. You can relayout it (ex: move Google Maps from top to bottom or vice versa) and tweak many other options from the Theme Customizer. Vivamus mollis orci nec ante tristique tempus. Nulla turpis magna, elementum porttitor leo nec, varius pulvinar elit.
                        </p>
                    </div>
                </div>
			     
                  <div class="row">
                    <div class="col-lg-12 col-xs-12">
                        <iframe width="100%" height="450" frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJSzJhTee04hIRi-8gjEHC9TM&key=AIzaSyAu_ZGofOcYU7nKPmLEv4kmk5AuqsE2gpg" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
		</div>

	</div>
</body>
</html>
