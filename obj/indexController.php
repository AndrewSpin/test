<?php
include_once 'controller.php';
include_once 'view.php';



class ModelCreator{

    public function modelCreat(){

        return new ProductModel();
    }
}

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

class IndexController extends Controller {

    public function action(){

        $model = $this->modelCreator->modelCreat();
        $result = $model->getProductById(10);

        $this->view = new View();
        $this->view->render('index2.php', $result);
    }

}

