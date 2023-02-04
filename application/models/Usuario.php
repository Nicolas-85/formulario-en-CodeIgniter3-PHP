<?php
class Usuario extends CI_Model {
    function __construct(){
        $this->load->database();
        // $this->load->controller('Registro');
    }

    public function crear($data){
        // validamos que se creen los datos.
        if(!$this->db->insert('usuarios', $data)){
            return false;
        } else {
            return true;
        };
        
    }
}