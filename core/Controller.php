<?php
/*
 * This Source is developed by Cuble Dev
 * Name: Inertia MicroFramework
 * 
 * author: Roberto Rubio - @robertorubioes
 * author: Sergio Collado - @circun4
 */

class Controller extends Core{
    
    var $controller;
    var $method;
    var $param;
    var $library    =   Array();
    var $helper     =   Array();
    var $model      =   Array();
    
    function Controller(){
       
        //require_once(PATH_CORE.'Library.php');
        //require_once(PATH_CORE.'Helper.php');
        require_once(PATH_CORE.'Model.php');
        
    }
    
    function index(){
        echo "Error need method index";
    }
    
    //Load helper, library or model
    function load($instance,$name){
        return $this->_load(strtolower($instance),strtolower($name));
    }
            
    function _load($instance,$name){
        
        require_once(PATH_CORE.ucwords($instance).'.php');
        //FIXME load model,library or helper
        if(file_exists(PATH_APP.$instance.'/'.$name.'.php')) {
            
            if (!array_key_exists($name, $this->$instance)){
                    
                 require PATH_APP.$instance.'/'.$name.'.php';
                 
                 $t = &$this->$instance;
                 $t[$name] = new $name();
                 
                 return $t[$name];
                 
            }else{
            
                 return $t[$name];
            }
        }else{
                return false;
        }
       
    }
    
    function helper($name)
    {
        return in_array(strtolower($name), $this->helper)? $this->helper[strtolower($name)] : false;
    }
    
    function library($name)
    {
        return in_array(strtolower($name), $this->library)? $this->library[strtolower($name)] : false;
    }
    
    function model($name)
    {
        
        return in_array(strtolower($name), $this->model)? $this->model[strtolower($name)] : false;
    }
    //param array
    function json($data){
       
        if(!count($data)>0){
            error_404();
        }else{
            header('Content-type: text/html');
            echo json_encode($data);
        }
        
        
    }
    
    
    
}

?>
