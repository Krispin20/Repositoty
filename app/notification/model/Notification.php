<?php
 
class Notification extends Model{

    public function example(){

        $p = Model::table("dd_notification")->get(array("user_type","id","send_time","date"))=> filter(array("id" => 1))->->send();
       
    
        $this->viewJSON($p);
       
     

       echo   ($_GET["user_type"]); 
 }
}



