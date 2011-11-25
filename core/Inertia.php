<?php

/*
 * This Source is developed by Cuble Dev
 * Name: Inertia MicroFramework
 * 
 * author: Roberto Rubio - @robertorubioes
 * author: Sergio Collado - @circun4
 */


 class Inertia {
    
   var $controller;
   var $method;
   var $param;
   var $error;
    
    function Inertia($controller, $method, $param = false) {
    
        
        $this->controller   =   $controller;
        $this->method       =   $method;
        $this->param        =   $param;
        
       
        
    }
    
}
    
 
 
 
?>
