<?php 
include ('controller/MainController.php');
require ('components/header.php');

$MainController = new MainController;
$MainController->HandleRequest();

require ('components/footer.php');
?>