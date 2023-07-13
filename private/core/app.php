<?php

class App{
	protected $controller = "home";
	protected $method =  "index";
	protected $params = array();

	public function __construct(){
		// code ....
		$URL = $this->getURL();
		if(file_exists("../private/controllers/".$URL[0].".php")){
			$this->controller = ucfirst($URL[0]);
			unset($URL[0]);
		}

		 require "../private/controllers/".$this->controller.".php";
		$this->controller = new $this->controller();

		if(isset($URL[1])){
			if(method_exists($this->controller, $URL[1])){
			 $this->method = ucfirst($URL[1]);
			 unset($URL[1]);
			}
		}
		$URL = array_values($URL);
		$this->params = $URL;
		call_user_func_array([$this->controller,$this->method],$this->params);

	}

	private function getURL(){
		/*
			this is for clean data
			user enter in url is put
			into the array of string 
			format
			$url varibale is for if someone inter nothing it redirect to 
			home page and if user can add /public/student
			then array save just like that 
				Array 
					(
  						  [0] => sutdents
					)

		*/
		$url = isset($_GET['url']) ? $_GET['url'] : "home";
		return explode("/", filter_var(trim($url,"/")),FILTER_SANITIZE_URL);
	}

}
