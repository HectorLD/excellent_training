<?php 
include ('model/DataHandler.php');
class MainModel
{
    public function __construct(){

        $this->DataHandler = new DataHandler('localhost','mysql','ashraf','root','');
    }




    public function collectAll(){





    }


}


?>