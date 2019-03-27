<?php

class HomeController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        $meal = new MealModel();
        $meals = $meal->listAll();
        $session = new userSession();
        $email = $_SESSION['email'];
        $user = new MealModel();
        $name = $user->fetch($email);
        return ["name" => $name , "tr" => $meals];
    	/*
    	 * Méthode appelée en cas de requête HTTP GET
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
    	 */
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
    	/*
    	 * Méthode appelée en cas de requête HTTP POST
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    	 */
    }
}