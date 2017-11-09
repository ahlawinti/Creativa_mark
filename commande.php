<?php 
session_start();


//tekhou les infos post
//insertion base donnée ta3 il commande

unset($_SESSION['itemscount']);
unset($_SESSION['itemsstored']);

header('Location: index.php');

?>