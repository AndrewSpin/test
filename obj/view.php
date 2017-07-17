<?php
include_once 'indexController.php';

class View{

    public function render($template, array $result){

        require '../web/view/'.$template;


    }
}

