<?php

use FStudio\fsController as controller;

/**
 * Description of categorias
 *
 * @author balem
 */
class categorias extends controller {

    public function execute() {
        $this->defineView('home', 'categorias', 'html');
    }

}
