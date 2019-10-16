<?php
 
class Notification extends Model{

    public function example(){

        $this->viewJSON( Model::table("users_person_data")->get()->sort('id', 'desc')->send() );
        // $stmt = self::$db->prepare("SELECT * FROM  `users_person_data` ORDER BY :field DESC");
        
$connection = new mysqli("localhost","v_login,v_De3*jd_lk","",'v_db');
$query = "select id from dd_notification";
$result = $connection->query($query);
while($row = mysqli_fetch_array($result)) 
{
echo $row['id']."<br>\n";
}
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
