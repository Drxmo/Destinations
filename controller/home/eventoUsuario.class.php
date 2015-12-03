<?php

use FStudio\fsController as controller;

/**
 * Description of eventoUsuario
 *
 * @author balem
 */
class eventoUsuario extends controller {

    public function execute() {
        $this->defineView('home/usuario', 'eventoUsuario', 'html');
    }

}
