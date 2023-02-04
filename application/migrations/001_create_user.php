<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_user extends CI_Migration {

        public function up() // este es el método que se ejecuta para crear...
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'user_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => TRUE,
                        ),
                        'password' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => TRUE,
                        ),
                        'status' => array( //no se bien para qué funciona el status.
                                'type' => 'TINYINT',
                                'constraint' => '1',
                                'null' => TRUE,
                        ),
                        'range' => array( //este campo se crea para dar los privilegios de en la app..
                                'type' => 'TINYINT',
                                'constraint' => '1',
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('id', TRUE); //esto es para que se creen los id's....
                $this->dbforge->create_table('Usuarios'); //le damos el nombre a la tabla.
        }

        public function down() //este es el método que borra todo cuando en la configuración 
        {                      //cambiamos la versión de la migración. 
                $this->dbforge->drop_table('Usuarios');
        }
}