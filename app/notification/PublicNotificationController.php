<?php

/*
 * Every class derriving from Model has access to $this->db
 * $this->db is a PDO object
 * Has a config in /core/config/database.php
 */

class PublicNotificationController {
 new class Notification extends Model{

	//авторизация пользователя
    public function example()
    { 
        
        
       //$array = ["1","2","3","4"];
        //echo $this->viewJSON($array);
        
        
    }
    
    //регистрация пользователя
    public function registration(){ echo (new Authorization())->startRegistration(); }
    
    //проверка токена или ключа
    
    //выход из системы
    
    //восстановление пароля
    
    //восстановление логина

 }

}

?>
