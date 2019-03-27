<?php 
class panierModel{

    public function insertcom($userid,$mealid,$qte,$total){
  		
  		$db = new Database();
  		$sql = "INSERT INTO com VALUES ('".$userid."','".$mealid."','".$qte."','".$total."')";
  		return $db->executeSql($sql);

  		// var_dump($userid,$mealid,$qte,$total);
  	
  	}
  	public function show($userid){
  		$db = new Database();
  		$sql = "select meal.id, meal.name, meal.description, meal.photo, SUM(com.quantity) as qte, SUM(com.total) as total FROM meal, com WHERE mealid = meal.id && userid='".$userid."' GROUP BY mealid";
  		return $db->query($sql);
  	}
    public function delete($mealid){
      $db = new Database();
      $sql = "DELETE FROM com Where '".$mealid."'";
      return $db->executeSql($sql);
    }

   

}                      