<?php
session_start();
require 'database.php';
$code = $_GET['code'];
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM produits WHERE code = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($code));
        $row=$q->fetch(PDO::FETCH_ASSOC);
            $price= $row["prix"];
            $name= $row["name"];
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

    <?php require"header.php";?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-2 col-md-2 a">
                <br><br>
                <?php  require'menusidebar.php'; ?>
            </div>

            <?php  require'modals.php'; ?>

            <div id="content" ><br>
                <div class="row">
                    <div class="col-xs-11 col-md-11  col-md-offset-1 ">
                        <h2><?php echo $name ?></h2>
                      
                    </div>
                </div>
            
                 <div class="row"><br>
                       <div class="col-md-7 col-xs-8 col-md-offset-1">
                           <iframe width="100%" height="500" src="https://www.youtube.com/embed/NpEaa2P7qZI" frameborder="0" allowfullscreen></iframe>
                         </div>

                        <div class="col-md-4 col-xs-1 " >
                                              <div class="col-md-0">
                                                  <h3><?php echo $price ?> DT</h3> 
                                               </div>
                                            <div class="col-md-9 ">
                                                <form method="POST" action="plus.php">
                                                    Quantité : <input type="text" name="nbr">

                                                    <?php 
                                                    echo '<input type="hidden" name="code" value="'.$code.'">
                                                          <input type="hidden" name="name" value="'.$name.'">
                                                          <input type="hidden" name="price" value="'.$price.'">
                                                         ';
                                                    ?>

                                                    <input type="submit" name="Commander" id="button-Commander">
                                                </form>
                                            <br><br><h5><?php echo $description ?></h5>
                                            </div>
                         </div>
                </div>
                <div class="row">
                    <div class="col-md-7 col-xs-5 col-md-offset-1">
                        <br><br>
                        <p>
                        </p>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>

</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
