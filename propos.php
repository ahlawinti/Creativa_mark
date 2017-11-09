

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


<body id="front-body" style="background-image: url('img/propos1.jpg'); background-repeat: no-repeat; background-size: 100%;">
<?php require 'header.php' ?>


	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-2 col-md-2 a">
				<img class="img-circle img-responsive img-center" style="margin: auto; margin-top: 10%; width:80%;" src="img/Elyes Manai.jpg" alt="">

				<ul><br>
					<a href="propos.php"><li> A propos</li></a>

					<a href="blog.php"><li> Blog</li></a>
					<a href="contact.php"><li> Contact</li></a>
				</ul>

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
					<p id="textpropos">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ac sapien in neque vehicula egestas id vel nulla. Aliquam commodo suscipit sapien, id volutpat ante accumsan a. Nunc quam velit, egestas eget accumsan at, egestas at sem. Nulla facilisi. Phasellus quis ipsum tellus. Nunc quis leo nulla. Cras blandit orci sit amet sodales tincidunt. In vitae ornare felis. Duis porttitor pharetra dui, sed viverra odio dictum non. Phasellus volutpat, ante id semper aliquet, leo ipsum elementum erat, non tempus elit tellus eget neque. Morbi feugiat commodo sapien sed sagittis. Aliquam quam ipsum, elementum nec laoreet elementum, tristique et ex. Maecenas mauris neque, finibus sed commodo scelerisque, rutrum a ligula. Donec et urna sit amet libero mollis hendrerit in eu elit.

				Sed risus mauris, aliquam eu ipsum nec, ultrices sodales diam. Vestibulum condimentum eros non venenatis pellentesque. Cras tincidunt blandit dui, ut elementum elit elementum sit amet. Fusce eleifend ante vel mi efficitur porta. Fusce ullamcorper ultricies nunc ut maximus. Quisque nisi felis, auctor eget vestibulum vel, facilisis vitae ligula. Morbi sit amet consectetur est, et tincidunt eros.

				Pellentesque eget elit sem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras eleifend libero quis ligula dictum, et consequat est lacinia. Cras sit amet dui dolor. Aenean pretium leo sit amet velit lobortis ultricies. Praesent lacinia, mauris ac pellentesque mattis, purus mauris semper nunc, a accumsan arcu neque ut libero. In nec sapien eget enim condimentum congue id et tellus. Suspendisse dictum nunc nec nulla porta, non semper neque elementum. Donec dapibus, velit ut ullamcorper eleifend, leo tortor vestibulum libero, non sodales risus felis id nulla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent eu congue lectus. Pellentesque bibendum metus velit, in vulputate dui elementum tempor. In vulputate metus vel tortor molestie interdum. Curabitur sed maximus erat, sed semper augue. Praesent et iaculis sapien. Donec dignissim, nibh sit amet dictum dignissim, lectus elit posuere tortor, at egestas ipsum tortor pulvinar metus.

				Vestibulum ultricies lobortis est sit amet posuere. Maecenas luctus mollis dui, ac dictum ex lobortis facilisis. Vestibulum in tortor luctus, fermentum neque at, ultricies felis. Praesent eu mattis ante, eget lacinia ex. Mauris accumsan, nulla ut luctus elementum, risus arcu gravida justo, quis gravida mi ipsum vitae nibh. Etiam vulputate, orci sit amet dapibus efficitur, urna ex semper diam, id blandit mi libero in erat. Ut auctor ipsum erat, vel ultrices lacus lacinia eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc eu metus suscipit, fermentum nisi eget, lobortis velit. Pellentesque non purus ornare, ullamcorper nulla et, rhoncus enim. Integer tempor dui quis dolor hendrerit convallis. Aenean et ante at diam venenatis accumsan eu ut urna. Sed sed sem eros. Proin rhoncus lobortis urna nec congue. Donec bibendum sapien at sapien accumsan, volutpat auctor tortor sollicitudin. Phasellus gravida risus a porta posuere.

				Pellentesque id nulla dui. Sed tristique libero felis, id congue ante commodo ut. In convallis quam sed eros hendrerit pellentesque. Morbi pellentesque dui sit amet arcu consequat finibus. Sed tempus facilisis sollicitudin. Fusce at lacus at nibh porta tempus nec sed nibh. Vestibulum tempor mauris sollicitudin, fermentum nunc sit amet, ultrices odio. Praesent faucibus ante vitae neque tempus, eget consequat nulla suscipit. Vestibulum id ultricies mauris. Proin est justo, suscipit vel nunc id, porttitor ullamcorper est. Ut vitae semper odio, rutrum laoreet nibh. Nulla convallis ipsum et metus auctor tincidunt. Pellentesque vitae ipsum sit amet magna porttitor dictum et vitae lectus. Etiam a ipsum dui. Sed efficitur, libero a euismod egestas, lectus turpis dictum quam, ultrices sollicitudin tortor eros tincidunt urna. Pellentesque vel feugiat nisl, non facilisis erat.
				</p>
				</div>
			</div>

		</div>
	</div>
</body>
</html>
