<?php


class LoginController{

	public function httpGetMethod(Http $http, array $queryFields){
		return [ '_form' => new LoginForm(), 'login'=>'','class'=>'usr'];
		
	}

	

	public function httpPostMethod(Http $http, array $formFields){

		$login = '';

		$email = $formFields['email'];
 		$password = md5($formFields['password']);
        $userModel = new userModel();
		
		if(!$userModel->login($email,$password)){
			$login = 'Invalid email or password';
		}
 		else{
 			
 			$user = $userModel->login($email,$password);
	 	 	$session = new userSession();
	 	 	$session->sessionopen($email,$user['id']);
	 	 	$session->sessionshow(); 
	 	 	if($session->verifysession()){
	 	 		$http->redirectTo('/');
	 	 	}
	 	 	// header('Location: / ');
	 	 	// var_dump($user);
	 	 	
 	 }
 	    return ['login'=> $login ,'class'=>'usr'];
       
 	}
 }
