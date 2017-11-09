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
                        <div class="col-xs-12 col-lg-3"><a href="creativastaff.php"><button class="filter-button">Creativa Staff</button></a></div>
                        <div class="col-xs-12 col-lg-3"><a href="creativainterns.php"><button class="filter-button" >Creativa Interns</button></a></div>
                        <div class="col-xs-12 col-lg-3"><a href="creativastartups.php"><button class="filter-button" >Creativa Startups</button></a></div>
                        <div class="col-xs-12 col-lg-3"><a href="creativacoworkers.php"><button class="filter-button"  id="filter-active" >Creativa Coworkers</button></a>   </div>          
                     </div>
                 </div><br><br>
                 <div class="row">
                     <?php 
                       $pdo = Database::connect();
                                             $sql = "SELECT * FROM people WHERE title='coworkers'  ORDER BY name ASC ";
                                             foreach ($pdo->query($sql) as $row) {
                                                      echo '<div class="col-md-2 col-md-offset-1 " style="text-align:center">';
                                                      echo '<img class="img-circle img-responsive img-center img-circle" src="img/'.$row['name'].'.jpg" width="100%">';
                                                      echo '<h5>'.$row['name'].'</h5></div>';
                                             }
                                             Database::disconnect();
                     ?>
                 </div>
                 <div class="row">
                     <div class="col-xs-12 col-lg-2 col-lg-offset-5">
                        <button  style="width:100%;" type="button" class="btn btn-success" onclick="window.open('service.php')">Join us</button>
                     </div>
                 </div>
            </div>
        </div>

    </div>
</body>
</html>
