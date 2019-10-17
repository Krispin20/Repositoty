<?php
 
class Notification extends Model{

    public function example(){

         Model::table("dd_notification")->get()->sort('id', 'desc')->send();
        // $stmt = self::$db->prepare("SELECT * FROM  `users_person_data` ORDER BY :field DESC");
           $msv = array('x1' => 10, 'x2' => 20, 'x3' => 30); 
           $jmsv = json_encode($msv); 
        
        
        
        //писок полей, которые получаем из таблицы
        //отправка запроса
        // $id = "id";
        // $stmt->bindValue(":field", $id, PDO::PARAM_STR);

        // $result_query = $stmt->execute();

        // $rows = $stmt->fetchAll(PDO::FETCH_ASSOC); 

        // var_dump($rows);

        // $this->viewJSON($rows);
    }
    
    /*********************************** AUTHORIZATION BLOCK ************************************/
  

}

?>
