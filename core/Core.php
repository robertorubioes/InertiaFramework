<?php

/*
 * This Source is developed by Cuble Dev
 * Name: Inertia MicroFramework
 * 
 * author: Roberto Rubio  - @robertorubioes
 * author: Sergio Collado - @circun4
 * author: Vicent Climent - @climentvicent
 * author: Albert Abril   - @desmondo
 * 
 */

class Core{
    
    var $method;    
    var $version = "0.01";
    
    function Core(){
       
        $this->method = $_SERVER['REQUEST_METHOD'];  
        
        require_once(PATH_ERROR.'error.php');
        require_once(PATH_CONFIG.'load.php');        
        

    }
    
}
  
require_once(PATH_CONFIG.'config.php'); 
require_once(PATH_CORE.'Inertia.php');
require_once(PATH_CORE.'Controller.php');


$controller =  (isset($_REQUEST['controller'])&&!empty($_REQUEST['controller'])) ? strtolower($_REQUEST['controller']) :  strtolower($config['access_controller']);
$method     =  (isset($_REQUEST['method'])&&!empty($_REQUEST['method'])) ?  strtolower($_REQUEST['method']) :  strtolower($config['access_method']);
$param      =  (isset($_REQUEST['param'])) ?  strtolower($_REQUEST['param']) : false;  


//Test exist Controller
if(file_exists(PATH_APP."controller/".$controller.".php")){
    
    require_once(PATH_APP."controller/".$controller.".php");     
    $auxController  = new $controller();
    $auxController->method = $method;
    $auxController->controller = $controller;
    
    if($param !== false)
    {    
        $auxController->param   = is_array(json_encode($param))?json_encode($param):false;
       
    }
    else
    {
        $auxController->param = false;
    }
    
    $auxController->$method();

    
}





  
 


    
 
//only load by request need conection with db.
//require_once('Database.php');
?>
