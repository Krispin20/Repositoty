<?php
 
class Notification extends Model{

    public function example(){

        $this->viewJSON( Model::table("users_person_data")->get()->sort('id', 'desc')->send() );
        // $stmt = self::$db->prepare("SELECT * FROM  `users_person_data` ORDER BY :field DESC");
        
         -> get(array("id")) // список полей, которые получаем из таблицы
         -> send(1) //отправка запроса
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
