<?php 
	session_start();
	if (!isset($_SESSION['itemscount'])) {
		$_SESSION['itemscount'] = 0;
	}
	if (!isset($_SESSION['itemsstored'])) {
		$_SESSION['itemsstored'] =  array();
		}
	require 'database.php'; 
?>
<!DOCTYPE html>
<html lang="fr">

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
				<div class="row filter-box ">
					<div class="col-lg-12 row">
							<div class="col-xs-12 col-lg-2 col-lg-offset-3 filter-div"><button class="filter-button" id="whobtn"> Who We Are </a></div>
							<div class="col-xs-12 col-lg-2 filter-div"><button class="filter-button" id="teambtn"> Team </a></div>
							<div class="col-xs-12 col-lg-2 filter-div"><button class="filter-button" id="servicesbtn"> Services </button></div>
						</div>
				</div>
				<br><br>
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1 who row">
							<h2>Who We Are</h2>
						<div class="col-lg-4">
							<h3>Creativa</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="col-lg-4">
							<h3>Mission</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="col-lg-4">
							<h3>Vision</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
					<div class="col-lg-10 col-lg-offset-1 team row">
						<h2>Our Team</h2><br>
                        <div class="col-md-3" style="text-align:center">
	                        <img class=" img-responsive img-center img-circle" src="img/placeholder.png" width="100%">
	                        <h5>Akthem Naili</h5>
	                          <div class="row teamsocial">
								   	<div class="col-lg-3 col-lg-offset-3 col-xs-12"><a href="facebook"><img src="img/facebook.png" width="70%"></a></div>
								   	<div class="col-lg-3 col-xs-12"><a href="linkedin"><img src="img/linkedin.png" width="70%"></a></div>
				  			</div>
                        </div>

                         <div class="col-md-3" style="text-align:center">
	                        <img class=" img-responsive img-center img-circle" src="img/placeholder.png" width="100%">
	                        <h5>Ghada Bouzorraa</h5>
	                          <div class="row teamsocial">
								   	<div class="col-lg-3 col-lg-offset-3 col-xs-12"><a href="facebook"><img src="img/facebook.png" width="70%"></a></div>
								   	<div class="col-lg-3 col-xs-12"><a href="linkedin"><img src="img/linkedin.png" width="70%"></a></div>
				  			</div>
                        </div>
                        
                         <div class="col-md-3" style="text-align:center">
	                        <img class=" img-responsive img-center img-circle" src="img/Elyes Manai.jpg" width="100%">
	                        <h5>Elyes Manai</h5>
	                        <div class="row teamsocial">
								   	<div class="col-lg-3 col-lg-offset-3 col-xs-12"><a href="facebook"><img src="img/facebook.png" width="70%"></a></div>
								   	<div class="col-lg-3 col-xs-12"><a href="linkedin"><img src="img/linkedin.png" width="70%"></a></div>
				  			</div>
                        </div>
                        
                         <div class="col-md-3" style="text-align:center">
	                        <img class=" img-responsive img-center img-circle" src="img/placeholder.png" width="100%">
	                        <h5>Sophie</h5>
	                          <div class="row teamsocial">
								   	<div class="col-lg-3 col-lg-offset-3 col-xs-12"><a href="facebook"><img src="img/facebook.png" width="70%"></a></div>
								   	<div class="col-lg-3 col-xs-12"><a href="linkedin"><img src="img/linkedin.png" width="70%"></a></div>
				  			</div>
                        </div>
                        

					</div>
					<div class="col-lg-10 col-lg-offset-1 services row">
							<h2>Our Services</h2><br>
							 <div class="col-md-3" style="text-align:center">
		                        <img class=" img-responsive img-center img-circle" src="img/Coworking.jpg" width="100%">
		                        
		                        <h5>Coworking</h5>
		                        <hr class="services-hr" style="background-color: yellow">
		                        <p>Lorsque vous devenez membre de creativa, vous faites partie d’une riche communauté diversifiée de personnes motivées qui croient qu’un autre monde est possible.</p>
		                         <button type="button" class="btn btn-reserve" onclick="window.open('contact.php')">Réservez</button>

                        	</div>
                        </a>

                         <div class="col-md-3" style="text-align:center">
	                        <img class=" img-responsive img-center img-circle" src="img/Business Address.jpg" width="100%">
	                        
	                        <h5>Business Address</h5>
	                        <hr class="services-hr" style="background-color: red;">
	                         <p>Complétez votre identité d’entreprise! Votre adresse professionnelle est une pièce importante de votre marque. Il ne s’agit pas seulement de courrier, il s’agit d’une apparence professionnelle complète pour votre entreprise.</p>
	                          <button type="button" class="btn btn-reserve" onclick="window.open('contact.php')">Réservez</button>
                        </div>

                         <div class="col-md-3" style="text-align:center">
	                        <img class=" img-responsive img-center img-circle" src="img/Meeting Room.jpg" width="100%">
	                        
	                        <h5>Meeting Room</h5>
	                        <hr class="services-hr" style="background-color: blue;">
	                         <p>Nos salles de réunion et de formation sont ouvertes chaque jour entre 9h00 et 22h00. Elles sont pratiques pour des réunions de conseil d’administration, des formations ou des ateliers pour de petits groupes ou associations.</p>
	                          <button type="button" class="btn btn-reserve" onclick="window.open('contact.php')">Réservez</button>
                        </div>

                         <div class="col-md-3" style="text-align:center">
	                        <img class=" img-responsive img-center img-circle" src="img/Private Office.jpg" width="100%">
	                        
	                        <h5>Private Office</h5>
	                        <hr class="services-hr" style="background-color: green;">
	                         <p>Recevez vos clients, à n’importe quel moment! Vous êtes entrepreneur ou consultant? vous avez des rendez vous importants avec vos clients, et vous cherchez un lieu professionnel? Réservez notre bureau, à l’heure, et recevez vos clients durant la journée ou même les soirées.</p>
	                          <button type="button" class="btn btn-reserve" onclick="window.open('contact.php')">Réservez</button>
                        </div>
					</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</body>
<script type="text/javascript">

	$( document ).ready(function() {
	    $(".services").hide();
		$(".team").hide();

	});

	$("#whobtn").click(function(){
		$(".team").hide();
		$(".who").show();
		$(".services").hide();
	});

	$("#teambtn").click(function(){
		$(".team").show();
		$(".who").hide();
		$(".services").hide();
	});

	$("#servicesbtn").click(function(){
		$(".team").hide();
		$(".who").hide();
		$(".services").show();
	});

</script>
</html>
