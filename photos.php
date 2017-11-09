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
				<div class="col-xs-11 col-md-12 acceuil">
					
                           <div class="col-xs-12 col-md-3 item">
                           		<img src="img/Mobile.jpg" onclick="window.open(this.src)" width="100%">
                           </div>
                            <div class="col-xs-12 col-md-3 item">
                           		<img src="img/Mobile.jpg" width="100%">
                           </div>
                            <div class="col-xs-12 col-md-3 item">
                           		<img src="img/Mobile.jpg" width="100%">
                           </div>
                            <div class="col-xs-12 col-md-3 item">
                           		<img src="img/Mobile.jpg" width="100%">
                           </div>
                            <div class="col-xs-12 col-md-3 item">
                           		<img src="img/Mobile.jpg" width="100%">
                           </div>
                            <div class="col-xs-12 col-md-3 item">
                           		<img src="img/Mobile.jpg" width="100%">
                           </div>
                            <div class="col-xs-12 col-md-3 item">
                           		<img src="img/Mobile.jpg" width="100%">
                           </div>
                            <div class="col-xs-12 col-md-3 item">
                           		<img src="img/Mobile.jpg" width="100%">
                           </div>
                            <div class="col-xs-12 col-md-3 item">
                           		<img src="img/Mobile.jpg" width="100%">
                           </div>
                            <div class="col-xs-12 col-md-3 item">
                           		<img src="img/Mobile.jpg" width="100%">
                           </div>
                            <div class="col-xs-12 col-md-3 item">
                           		<img src="img/Mobile.jpg" width="100%">
                           </div>
                            <div class="col-xs-12 col-md-3 item">
                           		<img src="img/Mobile.jpg" width="100%">
                           </div>
                            <div class="col-xs-12 col-md-3 item">
                           		<img src="img/Mobile.jpg" width="100%">
                           </div>
                            <div class="col-xs-12 col-md-3 item">
                           		<img src="img/Mobile.jpg" width="100%">
                           </div>
                            <div class="col-xs-12 col-md-3 item">
                           		<img src="img/Mobile.jpg" width="100%">
                           </div>
                            <div class="col-xs-12 col-md-3 item">
                           		<img src="img/Mobile.jpg" width="100%">
                           </div>
                            <div class="col-xs-12 col-md-3 item">
                           		<img src="img/Mobile.jpg" width="100%">
                           </div>
                            <div class="col-xs-12 col-md-3 item">
                           		<img src="img/Mobile.jpg" width="100%">
                           </div>
                            <div class="col-xs-12 col-md-3 item">
                           		<img src="img/Mobile.jpg" width="100%">
                           </div>
                            <div class="col-xs-12 col-md-3 item">
                           		<img src="img/Mobile.jpg" width="100%">
                           </div>
                            <div class="col-xs-12 col-md-3 item">
                           		<img src="img/Mobile.jpg" width="100%">
                           </div>
                            <div class="col-xs-12 col-md-3 item">
                           		<img src="img/Mobile.jpg" width="100%">
                           </div>
                            <div class="col-xs-12 col-md-3 item">
                           		<img src="img/Mobile.jpg" width="100%">
                           </div>
                            <div class="col-xs-12 col-md-3 item">
                           		<img src="img/Mobile.jpg" width="100%">
                           </div>
                            <div class="col-xs-12 col-md-3 item">
                           		<img src="img/Mobile.jpg" width="100%">
                           </div>
                            <div class="col-xs-12 col-md-3 item">
                           		<img src="img/Mobile.jpg" width="100%">
                           </div>
                            <div class="col-xs-12 col-md-3 item">
                           		<img src="img/Mobile.jpg" width="100%">
                           </div>
				</div>
			</div>

		</div>
	</div>
</body>
</html>
