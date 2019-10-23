<?php
 
class Notification extends Model{

    //public function example(){

       // $p = Model::table("dd_notification")->get(array("user_type","id","send_time","date"))->filter(array("user_type" => $_GET["user_type"]))->send();
        
         //if(empty($_GET["user_type"])){
        //echo "Неправильный запрос, вы не ввели значение";
       // }
    
       // $this->viewJSON($p);
//}
    //public function exampleEdit(){
        
        //  $l = Model::table("dd_notification")->edit(array("user_type" => $_GET["user_type"] ), array("user_type"))->send();
          
        //echo "$l";

        //$this->viewJSON($l);  
//}          
    //   public function exampleDel(){
       
          //Model::table("dd_notification")->delete(array("id" => 4))->send();
          
          
 //}

    public function example(){
         
         $w = Model::table("dd_notification")->get(array("id_notification"))->filter(array("id_notification" => $_GET["id_notification"]))->send();
 
    $this->viewJSON($w);
 
 
 }


}

//volunteer, all , handicapped
