<?php 
class adminmodel{
public function admin($email,$password){
          $db = new Database();
          $sql = "SELECT * FROM adminuser WHERE email='".$email."' && password='".$password."'";
          return $db->queryOne($sql);



  	
  	}


}     