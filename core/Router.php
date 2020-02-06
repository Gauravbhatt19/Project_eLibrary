<?php
class Router{
	protected $routes=[];
	public static function load($file){
		$router = new static;
		require $file;
		return $router;
	}
	public function define($routes){
		$this->routes=$routes;
	}	
	public function direct($uri){
		try{
			if(array_key_exists($uri,$this->routes)){
				return $this->routes[$uri];
			}
			throw new Exception("<h1 class='text-center mt-5'>Error 404 ! Request is Invalid <br/> Go <a href='/'> Home</a></h1>");
		}
		catch (Exception $e){
			die($e->getMessage()); 
		}
	}
}

?>