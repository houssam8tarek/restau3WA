<?php 

class LogoutController{

	public function httpGetMethod(Http $http, array $queryFields){
		$session = new UserSession();
		$session->destroysession();

			$http->redirectTo('/user/login');
	}

}


 ?>