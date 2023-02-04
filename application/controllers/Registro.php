<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registro extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->helper(array('getmenu', 'url')); //se cargan los helpers en la clase constructora.
        $this->load->database(); //se carga la base de datos en la clase constructora.
        $this->load->model('Usuario'); //se carga el modelo Usuario en la clase constructora.
    }
    
    public function index(){
        $data['menu'] = main_menu();
        $this->load->view('registro', $data);
        // $query = $this->db->get('datos');
        //con esto nos fijamos si trae los registros que cargamos en la db....
        // var_dump($query->result()); //ver que es el result......
        
    }
//TERMINAR DE VER EL VIDEO PARA CHEQUEAR QUE TODO ESTO ESTÉ BIEN°°°°-----------------------------------------------
    public function registrar() {
        $username = $this->input->post('user_name');//recogemos los datos que vienen por método post desde el form.
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $datos = array( //creamos un array para guardar los datos del form y luego pasarlo todo junto al modelo.
            'user_name'=> $username,
            'email'=> $email,
            'password'=> $password //a estos datos le falta range y status, en el la tabla los tiene pero son de manejo interno.
        );
        $data['menu'] = main_menu();// cada vez que se ejecute el método registrar, se ejecuta el helper de menú para que se vea.
        if($this->Usuario->crear($datos)){ //condicional para ver si nos devuelve el resultado pasandole $data al método crear del modelo Usuario
            $data['msj'] = 'Registro exitoso';//si hay un resultado, creamos una variable 'msj' y le asignamos un msj de éxito.
            $this->load->view('registro', $data);// si hay un resultado, cargamos la vista registro, con el msj de éxito como 2do parámetro.
        } else {
            $data['msj'] = 'Ocurrión un error al registrarse'; //sino hay resultado, lo mismo que arriba pero msj de error.
            $this->load->view('registro', $data); //sino hay resultado, lo mismo que arriba pero con msj de éxito.
        };
    }//TERMINAR DE VER BIEN EL VIDEO Y FIJARSE SI TODO FUNCIONA CORRECTAMENTE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    // public function registrar (){ //Esta es la función que va a recibir los datos del formulario...
    //     //Acá estamos cargando los datos que ingresan y los guardamos en variables.
    //     $nombre_usuario = $this->input->post('user_name');
    //     $email = $this->input->post('email');
    //     $password = $this->input->post('password');
    //     // var_dump($nombre_usuario . ' ' . $email . ' ' . $password); //prueba para demostrar que encontramos algo.
    // }
}