<?php  

class ordersController{
	public function httpGetmethod(Http $http,array $queryFieds){
		$id = $_GET['id'];
		$session = new userSession();
		$meal = new MealModel();
		$meals = $meal->listOne($id);
		$sessionuser = $session->sessionshow();
		// var_dump($meals['id']);
		// var_dump($meals);
		return['meals'=> $meals , "class" => 'panier'];

	}
   public function httpPostMethod(Http $http, array $formFields){

   		$session = new UserSession();
   		$user = $session->sessionshow();
        // var_dump($formFields, $user['id']);
        $id = $_GET['id'];
		// $session = new userSession();
  		$total = $formFields['quantity']*$formFields['price'];
		$panier = new panierModel();
		$meal = new MealModel();
		$meals = $meal->listOne($id);
		$sessionuser = $session->sessionshow();
		 if($panier->insertcom($user['id'],$id,$formFields['quantity'],$total)){
			$http->redirectTo('/panier');
		}
		return['meals'=> $meals];

	}
   

}