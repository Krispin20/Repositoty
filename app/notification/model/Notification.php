<?php
 
class Notification extends Model{

    public function example(){

        $p = Model::table("dd_notification")->get(array("user_type","id","send_time","date"))->filter(array("user_type" => ('all'), "user_type" => ('	
handicapped'),"user_type" => ('	
volunteer')))->send();
       
    
        $this->viewJSON($p);
       
     

       echo   ($_GET["user_type"]); 
 }
}



