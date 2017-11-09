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
          
            <?php  require'modals.php'; ?>

            <div id="content" >
                 <div class="row filter-box">
                     <div class="col-md-10 col-md-offset-1 row">
                        <div class="col-xs-12 col-lg-3"><a href="creativastaff.php"><button class="filter-button"  id="filter-active" >Creativa Staff</button></a></div>
                        <div class="col-xs-12 col-lg-3"><a href="creativainterns.php"><button class="filter-button" >Creativa Interns</button></a></div>
                        <div class="col-xs-12 col-lg-3"><a href="creativastartups.php"><button class="filter-button" >Creativa Startups</button></a></div>
                        <div class="col-xs-12 col-lg-3"><a href="creativacoworkers.php"><button class="filter-button" >Creativa Coworkers</button></a>   </div>          
                     </div>
                 </div><br><br>
                 <div class="row"><br><br>
                             <div class="col-lg-2 col-md-offset-2" style="text-align:center">
                            <img class=" img-responsive img-center img-circle" src="img/placeholder.png" width="100%">
                            <h5>Akthem Naili</h5>
                              <div class="row teamsocial">
                                    <div class="col-lg-3 col-lg-offset-3 col-xs-12"><a href="facebook"><img src="img/facebook.png" width="70%"></a></div>
                                    <div class="col-lg-3 col-xs-12"><a href="linkedin"><img src="img/linkedin.png" width="70%"></a></div>
                            </div>
                        </div>

                         <div class="col-lg-2" style="text-align:center">
                            <img class=" img-responsive img-center img-circle" src="img/placeholder.png" width="100%">
                            <h5>Ghada Bouzorraa</h5>
                              <div class="row teamsocial">
                                    <div class="col-lg-3 col-lg-offset-3 col-xs-12"><a href="facebook"><img src="img/facebook.png" width="70%"></a></div>
                                    <div class="col-lg-3 col-xs-12"><a href="linkedin"><img src="img/linkedin.png" width="70%"></a></div>
                            </div>
                        </div>
                        
                         <div class="col-lg-2" style="text-align:center">
                            <img class=" img-responsive img-center img-circle" src="img/Elyes Manai.jpg" width="100%">
                            <h5>Elyes Manai</h5>
                            <div class="row teamsocial">
                                    <div class="col-lg-3 col-lg-offset-3 col-xs-12"><a href="facebook"><img src="img/facebook.png" width="70%"></a></div>
                                    <div class="col-lg-3 col-xs-12"><a href="linkedin"><img src="img/linkedin.png" width="70%"></a></div>
                            </div>
                        </div>
                        
                         <div class="col-lg-2" style="text-align:center">
                            <img class=" img-responsive img-center img-circle" src="img/placeholder.png" width="100%">
                            <h5>Sophie</h5>
                              <div class="row teamsocial">
                                    <div class="col-lg-3 col-lg-offset-3 col-xs-12"><a href="facebook"><img src="img/facebook.png" width="70%"></a></div>
                                    <div class="col-lg-3 col-xs-12"><a href="linkedin"><img src="img/linkedin.png" width="70%"></a></div>
                            </div>
                        </div>
                 </div>
                  <div class="row"><br><br>
                     <div class="col-xs-12 col-lg-2 col-lg-offset-5">
                        <button  style="width:100%;" type="button" class="btn btn-success" onclick="window.open('contact.php')">Join us</button>
                     </div>
                 </div>
            </div>
        </div>

    </div>
</body>
</html>
