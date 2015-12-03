<?php

use FStudio\fsController as controller;

/**
 * Description of config
 *
 * @author balem
 */
class config extends controller {

    public function execute() {
        $this->defineView('home/usuario', 'config', 'html');
    }

}
