<?php

class controller {
    public function loadView($viewName, $viewData = array()){
        extract($viewData);
        include 'views/'.$viewName.'.php';  
    }
    public function loadTemplate($viewName, $viewData = array()){
        extract($viewData);
        include 'views/template.php';
    }
    public function loadViewInTemplates($viewName){
        include 'views/'.$viewName.'.php';
    }
}
