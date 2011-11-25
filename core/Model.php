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

class Model{
    
    var $db;
   
    public function Model(){
            
             require_once PATH_CORE.'Database.php';
             require_once PATH_CONFIG.'database.php';
             $db_data = array($db['db_url'],$db['db_user'],$db['db_pass'],$db['db_name']);
             $this->db = new edb($db_data);
             
    }
    
    
    
    public function query($q){
        
        return $this->db->q($q);
    }
    
}


?>
