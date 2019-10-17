<?php
 
class Notification extends Model{

    public function example(){

        $p = Model::table("dd_notification")->get("all")->sort('id', 'desc')->send();
       
    
        // $this->viewJSON($p);
        
     

       echo 'all', ($_GET["user_type"]); 
 }
}



