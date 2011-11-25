<?php

/*
 * This Source is developed by Cuble Dev
 * Name: Inertia MicroFramework
 * 
 * author: Roberto Rubio - @robertorubioes
 * author: Sergio Collado - @circun4
 */

class user extends Model
{
    function user()
    {
        parent::Model();
    
    }
    
    function get(){
       return $this->query("SELECT * FROM user");
    }
}
?>
