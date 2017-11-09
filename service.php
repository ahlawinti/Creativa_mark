<?php 
session_start();
require 'database.php'; 

if (!isset($_SESSION['itemscount'])) {
    $_SESSION['itemscount'] = 0;
}
if (!isset($_SESSION['itemsstored'])) {
    $_SESSION['itemsstored'] =  array();
    }

$service = $_GET['service'];
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM services WHERE name = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($service));
        $row=$q->fetch(PDO::FETCH_ASSOC);
            $prix= $row["prix"];
            $description = $row['description'];
            Database::disconnect();



?>


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
                <img class="img-circle img-responsive img-center" style="margin: auto; margin-top: 10%; width:80%;" src="img/logo.jpg" alt="">
                <?php  require'menusidebar.php'; ?>
            </div>
            
            <?php require'modals.php';  ?>

            <div id="content col-lg-10"><br>
                <div class="container-fluid">
                    <div class="row">
                       <?php
                       echo '<div class="col-xs-12 col-lg-3 col-lg-offset-1"> <img src="img/'.$service.'.jpg" width="100%"></div>'; 
                       echo '<div class="col-lg-5  col-lg-offset-1"> '.$description.' </div>';
                       ?>

                    </div>
                    <div class="row">
                             
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
