<?php 

session_start();
$code = $_GET['code'];

foreach ($_SESSION['itemsstored'] as $key => $item) {
    if ($item == $code) {
        unset($_SESSION['itemsstored'][$key]);
        $_SESSION['itemscount'] -= 1 ;
    }
}

header("location: index.php");
?>