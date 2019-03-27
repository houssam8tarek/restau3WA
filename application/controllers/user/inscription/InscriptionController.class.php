<?php 
 class InscriptionController{
 	public function httpGetMethod(Http $http, array $queryFields){
           return ['_form' => new InscriptionForm(), 'message'=> '','class'=>'usr'];

                
 	}

 	public function httpPostMethod(Http $http, array $formFields){

 		$name = $formFields['name'];
 		$email = $formFields['email'];
 		$phone = $formFields['phone'];
 		$password = md5($formFields['password']);
 		$date = $formFields['date'];
      
      	$userModel = new userModel();

 		if($userModel->inscription($name,$email,$password,$phone,$date)){
 			$success = 'votre compte a ete Bien enregistre';
 		}

 		return ['message'=> $success,'class'=>'usr'];

 	}
 }

 ?>