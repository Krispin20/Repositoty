<?php
 
class Notification extends Model{

    public function example(){

        $p = Model::table("dd_notification")->get(array("user_type","id","send_time","date"))->filter(array("user_type1" => ('all'),"user_type2" =>('volunteer'),"user_type3" =>('handicapped')))->send();
       
    
        $this->viewJSON($p);
       
     

       echo   ($_GET["user_type"]); 
 }
}



//volunteer , all , handicapped
