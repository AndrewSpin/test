<?php
include_once "modelCreator.php";


abstract class Controller{

    protected $modelCreator;
    protected $view;

    public function __construct($modelCreator, $view)
    {
        $this -> modelCreator = $modelCreator;
        $this -> view = $view;
    }

    abstract public function action();
}
