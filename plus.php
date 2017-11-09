<?php
session_start();
require 'database.php';
$name = $_POST['name'];
$code = $_POST['code'];
$nbr = $_POST['nbr'];
$price = $_POST['price'];

if (in_array($code, $_SESSION['itemsstored'])) {

	foreach ($_SESSION['itemsstored'] as $key => $value) {
		if ($key == $name) {
			$_SESSION['itemsstored'][$code][2] += $nbr;

		}
	}
} 
else {
		$_SESSION['itemscount'] += 1;
		
		if (!isset($nbr)) { $Qte = 1;}
		else{ $Qte = $nbr;}

		$_SESSION['itemsstored'][$name] =  array($price,$code,$Qte);
		var_dump($_SESSION['itemsstored']);
	}


header("location: index.php");
?>