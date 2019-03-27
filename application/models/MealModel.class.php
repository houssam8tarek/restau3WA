<?php

class MealModel {
    public function listAll(){
          $db = new Database();
          $cm = "SELECT * FROM meal";
          return $db->query($cm);
       }
    public function listOne($id){
          $db = new Database();
          $cm = "SELECT * FROM meal WHERE id='".$id."'";
          return $db->queryOne($cm);
       }
     public function fetch($email){
           $data = new Database();
           $dm = "SELECT * FROM user WHERE email='".$email."'";
           return $data->queryOne($dm);
       }




}