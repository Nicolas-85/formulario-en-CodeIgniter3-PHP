<?php
    function main_menu(){ //creamos un helper con dos arreglos...
        return array(
            array( //este arreglo contiene el nombre que va a llevar el link del menú y su ruta 
                'title' => 'Login',
                'url' => base_url(), 
            ),
            array( //este arreglo contiene el nombre que va a llevar el link del menú y su ruta
                'title' => 'Registro', 
                'url' => base_url('/registro')
            )
            ); //Estos los recorremos en la view y tomamos el título para generar el <li>
                // y tomamos la url para generar el <a>
    }

?>