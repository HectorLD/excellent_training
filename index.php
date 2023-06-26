<?php 
include ('controller/MainController.php');
include ('components/header.php');

$MainController = new MainController;
$MainController->HandleRequest();

include ('components/footer.php');
?>