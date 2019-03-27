<?php 

 class PanierController {
 	 
     public function httpGetMethod(Http $http, array $queryFields){
 	 	$paniers = '';
        $usersession = new userSession();
        $session = $usersession->sessionshow();
        $userid= $session['id'];
        $paniermodel = new panierModel();
        $panier = $paniermodel->show($userid);

        // $mealmodel = new MealModel();
        // $paniers = array();
        // foreach($panier as $key){
        // 	array_push($paniers,$mealmodel->listOne($key['mealid']));
        

        // }
        
         return ['paniers' => $panier,"class" => 'panier'];


 	 }

     public function httpPostMethod(Http $http, array $formFields){
        $id = $formFields['id'];

        // var_dump($formFields);
        $panier = new panierModel();
        $panier->delete($id);

        $paniers = '';
        $usersession = new userSession();
        $session = $usersession->sessionshow();
        $userid= $session['id'];
        $paniermodel = new panierModel();
        $panier = $paniermodel->show($userid);

        $mealmodel = new MealModel();
        $paniers = array();
        foreach($panier as $key){
            array_push($paniers,$mealmodel->listOne($key['mealid']));
        

        }
        
         return ['paniers' => $paniers];



     }

 	 
 	
 }

