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
				<div class="container-fluid">
					<div class="row filter-box">
						<div class="col-md-10 col-md-offset-1 ">
							<div class="col-xs-12 col-lg-3"><button class="filter-button" id="all"> All </button></div>
							<div class="col-xs-12 col-lg-3"><button class="filter-button" id="webbtn"> Web </button></div>
							<div class="col-xs-12 col-lg-3"><button class="filter-button" id="mobbtn"> Mobile </button></div>
							<div class="col-xs-12 col-lg-3"><button class="filter-button" id="designbtn"> Design </button></div>
						</div>
						
					</div><br>
					<div class="row acceuil b">

						<?php
                        $pdo = Database::connect();
                        $sql = "SELECT * FROM blogposts  ORDER BY id ASC ";
                        foreach ($pdo->query($sql) as $row) {
                           
                         	echo '<a href="blogpost.php?id='.$row['id'].'" class="col-lg-6">';
							echo '<div class="blog-post '.$row['tag'].'">';
							echo '<div class="col-lg-6"><img src="img/blog/'.$row['id'].'.jpg" width="100%"></div>';
							echo '<div class="col-lg-6"><p>'.$row['title'].'</p>';
							echo '<p>'.$row['tag'].'';
							echo '<p>'.$row['description'].'</p>
								</div>
							</div>
						</a>';

                        }
                        Database::disconnect();
                    ?>
						
						

						
					</div>
				</div>
			</div>

		</div>
	</div>
</body>
<script type="text/javascript">

	$("#all").click(function(){
		$(".Web").show();
		$(".Mobile").show();
		$(".games").show();
		$(".Design").show();
	});

	$("#mobbtn").click(function(){
		$(".Web").hide();
		$(".Mobile").show();
		$(".games").hide();
		$(".Design").hide();
	});

	$("#webbtn").click(function(){
		$(".Web").show();
		$(".Mobile").hide();
		$(".games").hide();
		$(".Design").hide();
	});

	$("#gamebtn").click(function(){
		$(".Web").hide();
		$(".Mobile").hide();
		$(".games").show();
		$(".Design").hide();
	});

	$("#designbtn").click(function(){
		$(".Web").hide();
		$(".Mobile").hide();
		$(".games").hide();
		$(".Design").show();
	});
</script>
</html>
