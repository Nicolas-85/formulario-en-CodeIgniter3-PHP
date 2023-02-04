<?php
class Usuario extends CI_Model {
    function __construct(){
        $this->load->database();
        // $this->load->controller('Registro');
    }

    public function crear($datos){//recibe como parámetro el array con los datos del form. 
        $datos = array( //no entiendo porqué pasa los setea otra vez, scando al info del arreglo que llega. y le agrega status + range
            'user_name'=> $datos['user_name'],
            'email'=> $datos['email'],
            'password'=> $datos['password'], 
            'range'=> 1,
            'status'=> 2
        );
        // validamos que se creen los datos.
        if(!$this->db->insert('usuarios', $datos)){
            return false;
        } else {
            return true;
        };
        
    }
}