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
                <img class="img-circle img-responsive img-center" style="margin: auto; margin-top: 10%; width:80%;" src="img/Elyes Manai.jpg" alt="">

                        <?php  require'menusidebar.php'; ?>

            </div>
            <!-- Modals -->
                <div class="modal fade" id="LoginModal" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title"><h1 style="text-align: center;">Connectez-vous!</h1></h4>
                        </div>
                        <div class="modal-body">
                         
                            <div class="pannel-login">
                                <div class="pannel-heading">
                                    <hr>
                                </div>
                                    <div >
                                        <div id="login-form">
                                            <div class="row">
                                                <div class="col-lg-10 col-lg-offset-1">
                                                    <form action="login.php" method="POST">
                                                        <div class="form-group">
                                                            <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-6 col-sm-offset-3">
                                                                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                      
                    </div>
                </div>

                <div class="modal fade" id="commandeModal" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title"><h1 style="text-align: center;">Remplissez vos informations!</h1></h4>
                        </div>
                        <div class="modal-body">
                         
                            <div class="pannel-login">
                                <div class="pannel-heading">
                                    <hr>
                                </div>
                                    <div >
                                        <div id="login-form">
                                            <div class="row">
                                                <div class="col-lg-10 col-lg-offset-1">
                                                    <form action="commande.php" method="POST">
                                                        
                                                        <div class="form-group">
                                                            Nom &amp; Prénom :<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Nom et Prénom" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            Mail : <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Mail">
                                                        </div>
                                                        <div class="form-group">
                                                            Num. Téléphone : <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Numéro">
                                                        </div>
                                                        <div class="form-group">
                                                            Adresse : <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Adresse">
                                                        </div>
                                                        <div class="form-group">
                                                            Méthode de paiement : <select><option>espèce</option><option>Carte Crédit</option></select>
                                                        </div>
                                                        <div class="form-group">
                                                            Méthode de Livraison : <select><option>Livraison Sur Tunis</option><option>Au Magasin</option></select>
                                                        </div>


                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-6 col-sm-offset-3">
                                                                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Confirmer">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                      
                    </div>
                </div>

                <div class="modal fade" id="SignUpModal" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title"><h1 style="text-align: center;">Inscrivez-vous!</h1></h4>
                        </div>
                        <div class="modal-body">
                         
                            <div  id="register-form">
                                    <div class="row">
                                        <div class="col-lg-10 col-lg-offset-1">
                                            <form action="signup.php" method="POST">
                                                <div class="form-group">
                                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-sm-offset-3">
                                                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                      
                    </div>
                </div>
            
                <div class="modal fade" id="CartModal" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title"><h1 style="text-align: center;">Votre Panier</h1></h4>
                        </div>
                        <div class="modal-body">
                         
                            <div class="pannel-login">
                                <div class="pannel-heading">
                                    <hr>
                                </div>
                                    <div>
                                      <?php 
                                      $total = 0;
                                      foreach ($_SESSION['itemsstored'] as $key => $value) {
                                        echo '<div class="row">
                                            <div class ="col-md-3"> <img src="img/'.$key.'.jpg" width="100%"></div><div class="col-md-7"><br>';
                                            echo "<h4>".$key."</h4>";
                                            echo "<h4>".$value[2]."</h4>";
                                            echo "<h4>".$value[0]."DT</h4><br></div>";
                                            echo '<div class="col-md-2"><br><br><a href="moins.php?code='.$value[1].'"><button>Remove</button></a></div>';
                                        echo '<hr></div><br>';
                                        
                                        $total  = $value[0] * $value[2] ;
                                      }
                                      
                                      ?>
                                    </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                        <p>Total : <?php echo $total."DT"; ?></p>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success" data-dismiss="modal" data-toggle="modal" data-target="#commandeModal">Commander</button>
                        </div>
                      </div>
                      
                    </div>
                </div>

          <!--Modals End -->
            <div id="content" ><br>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 ">
                            <button class="filter-button" id="all"> All </button>
                            <button class="filter-button" id="webbtn"> Web </button>
                            <button class="filter-button" id="mobbtn"> Mobile </button>
                            <button class="filter-button" id="gamebtn"> Games </button>
                            <button class="filter-button" id="designbtn"> Design </button>
                        </div>
                    </div><br>
                    <div class="row">
                        <a href="offerpost.php?id=$var"><div class="blog-Job Postweb">
                            <p>Job PostName</p>
                            <p>Job PostTags /  Job PostDate</p>
                            <p>Job PostContent <br>**************************************************************************************************************<br>**********************************************************************************************************************************************<br>*********</p>
                            
                        </div>
                        </a><button>Apply<br></button>
                        <br>
                        <button><div class="blog-Job Postmobile">
                            <p>Job PostName</p>
                            <p>Job PostTags /  Job PostDate</p>
                            <p>Job PostContent <br>***************************************************************************************************************<br>*********************************************************************************************************************************************<br>*********</p>
                        </div></button><br>
                        <div class="blog-Job Postgames">
                            <p>Job PostName</p>
                            <p>Job PostTags /  Job PostDate</p>
                            <p>Job PostContent <br>************************************************************************************************************<br>**********************************************************************************************************************************************<br>***********</p>
                        </div><br>
                        <div class="blog-Job Postweb">
                            <p>Job PostName</p>
                            <p>Job PostTags /  Job PostDate</p>
                            <p>Job PostContent <br>************************************************************************************************************<br>*********************************************************************************************************************************************<br>************</p>
                        </div><br>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
<script type="text/javascript">

    $("#all").click(function(){
        $(".web").show();
        $(".mobile").show();
        $(".games").show();
        $(".design").show();
    });

    $("#mobbtn").click(function(){
        $(".web").hide();
        $(".mobile").show();
        $(".games").hide();
        $(".design").hide();
    });

    $("#webbtn").click(function(){
        $(".web").show();
        $(".mobile").hide();
        $(".games").hide();
        $(".design").hide();
    });

    $("#gamebtn").click(function(){
        $(".web").hide();
        $(".mobile").hide();
        $(".games").show();
        $(".design").hide();
    });

    $("#designbtn").click(function(){
        $(".web").hide();
        $(".mobile").hide();
        $(".games").hide();
        $(".design").show();
    });
</script>
</html>
