<?php
 
class Notification extends Model{

    public function example(){

        $p = Model::table("dd_notification")->get(array("user_type","id","send_time","date"))->filter(array("user_type" => "volunteer","	
handicapped","all"))->send();
       
    
        $this->viewJSON($p);
       
     

       echo   ($_GET["user_type"]); 
 }
}



