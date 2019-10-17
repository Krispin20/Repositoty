<?php
 
class Notification extends Model{

    public function example(){

        $p = Model::table("dd_notification")->get()->sort('id', 'desc')->send();
       
    
        // $this->viewJSON($p);
        
       get(array("all"));

       echo "$p", ($_GET["user_type"]); 
 }
}



