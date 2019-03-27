<?php

class userModel {
      	
      	public function inscription($name,$email,$password,$phone,$date){
         		$db = new Database();
          		$cm = "INSERT INTO user (name,email,password,phone,data) VALUES ('".$name."','".$email."','".$password."','".$phone."','".$date."')";
          	/*return $db->query($cm);*/
          	return $db->executeSql($cm);
       }
       public function login($email,$password){
       	   $data = new Database();
       	   $dm = "SELECT * FROM user WHERE email='".$email."' && password='".$password."'";
       	   return $data->queryOne($dm);
       }
       /*public function fetch($email,$name){
            $data = new Database();
            $dm = "SELECT * FROM user WHERE email='".$email."'$$ name='".$name."'";
            return $data->queryOne($dm);
       }*/
       public function testinsert($name,$email,$password){
        $db = new Database();
        $con = "INSERT INTO user (name,email,password) VALUES ('".$name."','".$email."','".$password."')";
        return $db->executeSql($con);
       }
}



