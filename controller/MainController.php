<?php 
include ('model/MainModel.php');

class MainController
{
    public function __construct(){
        $this->MainModel = new MainModel;


    }


    public function HandleRequest(){
        $page = isset($_REQUEST['page'])? $_REQUEST['page']: NULL;


        switch($page){



            default:
            echo "This is the default screen of this project";
                break;
        }


    }





}



?>