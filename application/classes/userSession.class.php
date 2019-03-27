<?php  

class userSession {
	public function __construct(){
		if(empty($_SESSION)){
			session_start();
		}
	}
	public function sessionopen($email,$id){
		$_SESSION['email'] = $email;
		$_SESSION['id'] = $id;
		return $_SESSION;
	}
	public function verifysession(){
		if(!empty($_SESSION)){
			return true ;
		}
		return false ;
	}
	public function destroysession(){
		session_destroy();
	}

    public function sessionshow(){
    	return $_SESSION;   
    }
}