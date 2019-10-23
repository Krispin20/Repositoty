<?php
 
class Notification extends Model{

    public function getAll(){

        $p = Model::table("dd_notification")->get(array("user_type","id","send_time","date"))->filter(array("user_type" => $_GET["user_type"]))->send();
        
      
     
         if(empty($_GET["user_type"])){
            echo "Неправильный запрос, вы не ввели значение";
        }else{
            $this->viewJSON($p); 
        }
    
       
}
    public function exampleEdit(){
        
        $l = Model::table("dd_notification")->edit(array("user_type" => $_GET["user_type"] ), array("user_type"))->send();
          
        echo "$l";

        $this->viewJSON($l);  
}          
     public function exampleDel(){
       
          Model::table("dd_notification")->delete(array("id" => 4))->send();
          
          
 }

    public function exampleW(){
         
         $w = Model::table("dd_notification_opened")->get(array("id_notification","id_user","open_time"))->filter(array("id_user" => $_GET["id_user"]))->send();
 
     if(empty($_GET["id_user"])){
        echo "Неправильный запрос";
        }
    
 
 
  } 


}

//volunteer, all , handicapped
