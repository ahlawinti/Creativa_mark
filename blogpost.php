<?php 
session_start();
if (!isset($_SESSION['itemscount'])) {
	$_SESSION['itemscount'] = 0;
}
if (!isset($_SESSION['itemsstored'])) {
	$_SESSION['itemsstored'] =  array();
	}
require 'database.php';
$id = $_GET['id'];
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM blogposts WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $row=$q->fetch(PDO::FETCH_ASSOC);
            $title= $row["title"];
            $content = $row['content'];
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
				     <?php  require'menusidebar.php'; ?>

			</div>
			         <?php require'modals.php';  ?>
			<div id="content" class="row"><br>
				<div class="col-lg-6"><br>
				<?php echo	'<img src="img/blog/'.$id.'.jpg" width="100%">'; ?>
				</div>
				<div class="col-lg-6" style="overflow-y: scroll; height: 85vh;">
					<?php 
						echo "<h2>".$title."</h2><br>" ;
						echo $content;
					?>

				</div>
			</div>

		</div>
	</div>
</body>
</html>
