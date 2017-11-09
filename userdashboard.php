<?php 
session_start();


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


<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-2 col-md-2 a2">
      <br>
        <img class="img-circle img-responsive img-center" style="margin: auto;" src="img/Elyes Manai.jpg" alt="">
        <br>
        <p>Level : 2 |  Next Level : 50 XP</p>
        <p>Titre : Novice</p>
        <p>EXP : 30  | CPoints : 300</p>
       
        <ul><br>
          <a href="propos.php"><li>Acceuil</li></a>
          <a href="profile.php"><li>Profile</li></a>
          <a href=""><li>Travaux en cours</li></a>
          <a href=""><li>Travaux passés</li></a>
          <a href="faq.php"><li> règlages</li></a>
          <a href="contact.php"><li> Se Déconnecter</li></a>
        </ul>

      </div>
      <div id="content" ><br>

      

      </div>

    </div>
  </div>



</body>

  

  <script type="text/javascript">
    affichlogin(){
      $("#login").hide();
    }
    affichsignup(){
      $("#signup").removeClass("hidden");
      $("#signup").addClass("display");
    }
  </script>
  

</html>
