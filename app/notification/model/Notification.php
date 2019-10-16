<?php
 
class Notification extends Model{

    public function example(){

         $this->viewJSON($id) Model::table("users_person_data")->get()->sort('id', 'desc')->send();
        // $stmt = self::$db->prepare("SELECT * FROM  `users_person_data` ORDER BY :field DESC");
        
         // список полей, которые получаем из таблицы
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
