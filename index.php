<?php 

 // hedhouma lil panier ta3 l'acceuil
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
				<div class="col-xs-11 col-md-12 acceuil row">
					<?php
                        $pdo = Database::connect();
                        $sql = "SELECT * FROM Categories  ORDER BY name ASC ";
                        foreach ($pdo->query($sql) as $row) {
                            echo '<a href="products.php?category='.$row['name'].'">';
                            echo '<div class="col-xs-12 col-md-3 item"><img src="img/'.$row['name'].'.jpg" width="100%">';
                            echo '<div class="item-description"><h5>'.$row['name'].'</h5></div></div></a>';
                        }
                        Database::disconnect();
                    ?>
				</div>
			</div>
		</div>
	</div>
</body>
<script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
      document.getElementById("livesearch").style.zIndex="2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
</html>
