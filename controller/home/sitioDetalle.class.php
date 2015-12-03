<?php

use FStudio\fsController as controller;

/**
 * Description of sitioDetalle
 *
 * @author balem
 */
class sitioDetalle extends controller {

    public function execute() {
        $this->defineView('home', 'sitioDetalle', 'html');
    }

}
