<?php

class Paginas extends Controller {

	public function index(){
		
		$this->view('Pages/home');
	}

	public function sobre(){

		$this->view('Pages/sobre');
	}
}

?>