<?php
 
class Notification extends Model{

    public function example(){

        $p = Model::table("dd_notification")->get(array("user_type","id","send_time","date"))->filter(array("user_type" => $_GET["user_type"]))->send();
        
         if(empty($_GET["user_type"])){
        echo "Неправильный запрос, вы не ввели значение";
        }
    
        $this->viewJSON($p);
    
    
          $g = 1;
          $l = Model::table("dd_notification")->edit(array("user_type" => $g ), array("id" => 1))->send();
          
          echo "$l";

          $this->viewJSON($l);         
 }

}



//volunteer, all , handicapped
