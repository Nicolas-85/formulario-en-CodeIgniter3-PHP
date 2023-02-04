<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){ //creamos un constructor
		parent::__construct();//creamos otro que contenga la clase de su padre CI_Controler
		
		//para poder cargar más de un helper, usamos un array...
		$this->load->helper(array('getmenu', 'url'));//no entiendo bien el helper 'url'...
	}

	public function index(){
		$data['menu'] = main_menu(); //cargamos como $data una función del helper para poder visualizar.
		$this->load->view('login', $data); //se la enviamos a la vista del controlador para poder pintarla.
	}
}
