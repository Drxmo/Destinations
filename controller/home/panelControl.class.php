<?php

use FStudio\fsController as controller;

/**
 * Description of panelControl
 *
 * @author balem
 */
class panelControl extends controller {

    public function execute() {
        $this->defineView('home/usuario', 'panelControl', 'html');
    }

}
