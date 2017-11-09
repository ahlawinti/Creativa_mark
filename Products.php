<?php 
session_start();
if (!isset($_SESSION['itemscount'])) {
	$_SESSION['itemscount'] = 0;
}
if (!isset($_SESSION['itemsstored'])) {
	$_SESSION['itemsstored'] =  array();
	}
$category = $_GET['category'];
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
				<img class=" img-responsive img-center" style="margin: auto; margin-top: 10%; width:100%;" src="img/logo.jpg" alt="">
				<br><br>
				<?php  require'menusidebar.php'; ?>
			</div>

			<?php  require'modals.php'; ?>
			<div id="content" ><br>
				<div class="col-xs-11 col-md-12 ">
					<?php
                                             $pdo = Database::connect();
                                             $sql = "SELECT * FROM produits WHERE category ='$category' ORDER BY name ASC ";
                                             foreach ($pdo->query($sql) as $row) {
                                                      echo '<a href="produit.php?code='.$row['code'].'">';
                                                      echo ' <div class="col-xs-12 col-md-3 item"><img src="img/'.$row['name'].'.jpg" width="100%">';
                                                      echo '<div class="item-description"><h5>'.$row['name'].'</h5></div></div></a>';
                                             }
                                             Database::disconnect();
                    ?>

 <!--
					<a href="produit.php?code=Graphic Design">
						<div class="col-xs-12 col-md-2 item">
							<img src="img/Graphic Design.jpg" width="100%">
							<div class="item-description">
								<h5>Graphic Design</h5>
								
							</div>
						</div>
					</a>
					<a href="produit.php?code=design">
						<div class="col-xs-12 col-md-2 item">
							<img src="img/Graphic Design.jpg" width="100%">
							<div class="item-description">
								<h5>Graphic Design</h5>
								
							</div>
						</div>
					</a>
					<a href="produit.php?code=design">
						<div class="col-xs-12 col-md-2 item">
							<img src="img/Graphic Design.jpg" width="100%">
							<div class="item-description">
								<h5>Graphic Design</h5>
								
							</div>
						</div>
					</a>
					<a href="produits.php?code=Mobile">
						<div class="col-xs-12 col-md-2 item">
							<img src="img/Mobile.jpg" width="100%">
							<div class="item-description">
								<h5>Mobile</h5>
					
							</div>
						</div>
					</a>
					<a href="produits.php?code=Tech">
						<div class="col-xs-12 col-md-2 item">
							<img src="img/Tech.jpg" width="100%">
							<div class="item-description">
								<h5>Tech</h5>
							</div>
						</div>
					</a>
					<a href="">
						<div class="col-xs-12 col-md-2 item">
							<img src="img/Business.jpg" width="100%">
							<div class="item-description">
								<h5>Business</h5>
							</div>
						</div>
					</a>
				</div>

				<div class="col-xs-10 col-md-12">
					<a href="">
						<div class="col-xs-12 col-md-2 item">
							<img src="img/Photography.jpg" width="100%">
							<div class="item-description">
								<h5>Photography</h5>
							</div>
						</div>
					</a>
					<a href="produit.php?code=design">
						<div class="col-xs-12 col-md-2 item">
							<img src="img/Graphic Design.jpg" width="100%">
							<div class="item-description">
								<h5>Graphic Design</h5>
								
							</div>
						</div>
					</a>
					<a href="produit.php?code=design">
						<div class="col-xs-12 col-md-2 item">
							<img src="img/Graphic Design.jpg" width="100%">
							<div class="item-description">
								<h5>Graphic Design</h5>
								
							</div>
						</div>
					</a>
					<a href="">
						<div class="col-xs-12 col-md-2 item">
							<img src="img/Social Media.jpg" width="100%">
							<div class="item-description">
								<h5>Social Media</h5>
							</div>
						</div>
					</a>
					<a href="">
						<div class="col-xs-12 col-md-2 item">
							<img src="img/Security.jpg" width="100%">
							<div class="item-description">
								<h5>Security</h5>
							</div>
						</div>
					</a>
					<a href="">
						<div class="col-xs-12 col-md-2 item">
							<img src="img/3D.png" width="100%">
							<div class="item-description">
								<h5>3D</h5>
							</div>
						</div>
					</a>
				</div>

				<div class="col-xs-10 col-md-12">
					<a href="">
						<div class="col-xs-12 col-md-2 item">
							<img src="img/Photography.jpg" width="100%">
							<div class="item-description">
								<h5>Photography</h5>
							</div>
						</div>
					</a>
					<a href="produit.php?code=design">
						<div class="col-xs-12 col-md-2 item">
							<img src="img/Graphic Design.jpg" width="100%">
							<div class="item-description">
								<h5>Graphic Design</h5>
								
							</div>
						</div>
					</a>
					<a href="produit.php?code=design">
						<div class="col-xs-12 col-md-2 item">
							<img src="img/Graphic Design.jpg" width="100%">
							<div class="item-description">
								<h5>Graphic Design</h5>
								
							</div>
						</div>
					</a>
					<a href="">
						<div class="col-xs-12 col-md-2 item">
							<img src="img/Social Media.jpg" width="100%">
							<div class="item-description">
								<h5>Social Media</h5>
							</div>
						</div>
					</a>
					<a href="">
						<div class="col-xs-12 col-md-2 item">
							<img src="img/Security.jpg" width="100%">
							<div class="item-description">
								<h5>Security</h5>
							</div>
						</div>
					</a>
					<a href="">
						<div class="col-xs-12 col-md-2 item">
							<img src="img/3D.png" width="100%">
							<div class="item-description">
								<h5>3D</h5>
							</div>
						</div>
					</a>
				</div>
				-->
				</div>
			</div>

		</div>
	</div>
</body>
</html>
