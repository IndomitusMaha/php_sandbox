<?php 

require_once './models/Model1.php';
require_once './views/View1.php';

class Controller1 {
    public $model;
    public $view;
    
    public function SetView(){
        
        $model = new Model1();
        $resultModel = $model -> GetData();
        
        $view = new View1();
        $resultView = $view -> ViewPage1();
    }
    
}