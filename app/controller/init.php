<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class init extends Controller{
    
    function init(){
         parent::Controller();     
         
    }
    
    function index(){
        
        $user = $this->load('model','user');        
        print_r($user->get());
        
        //$this->json();
        //$this->get(array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5));
    }
    
}

?>
