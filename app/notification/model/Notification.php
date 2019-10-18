<?php
 
class Notification extends Model{

    public function example(){

        $p = Model::table("dd_notification")->get(array("user_type"))->send();
       
    
        $this->viewJSON($p);
      
     

       echo   ($_GET["user_type"]); 
 }
}



