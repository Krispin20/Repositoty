<?php
 
class Notification extends Model{

    public function example(){

        $p = Model::table("dd_notification")->get(array("user_type","id","send_time","date"))->filter(array("user_type" => ($_GET["user_type"]),("user_type" => ($_GET['NULL']) echo "Вы не в вели значение");))->send(){
        
        }
       
    
        $this->viewJSON($p);
       
     

       echo   ($_GET["user_type"]); 
 }
}



//volunteer, all , handicapped
