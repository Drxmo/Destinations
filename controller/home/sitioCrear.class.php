<?php

use FStudio\fsController as controller;

/**
 * Description of sitioCrear
 *
 * @author balem
 */
class sitioCrear extends controller {

    public function execute() {
        $this->defineView('home/usuario', 'sitioCrear', 'html');
    }

}
