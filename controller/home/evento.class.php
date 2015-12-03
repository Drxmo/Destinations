<?php

use FStudio\fsController as controller;

/**
 * Description of evento
 *
 * @author balem
 */
class evento extends controller {

    public function execute() {
        $this->defineView('home', 'evento', 'html');
    }

}
