<?php

/*
 * Every class derriving from Model has access to $this->db
 * $this->db is a PDO object
 * Has a config in /core/config/database.php
 */

class PublicNotificationController {
 
	//авторизация пользователя
    public function getAll()
    { 
        
        $p = new Notification();
        $funcname = "getAll";
        $p->$funcname();
        
        
        
       //$array = ["1","2","3","4"];
       //echo $this->viewJSON($array);
        
        
    }
    
     public function exampleW()
    { 
        
        $p = new Notification();
        $funcname = "exampleW";
        $p->$funcname();
        
        
        
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



?>
