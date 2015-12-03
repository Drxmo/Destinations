<?php

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of logOut
 *
 * @author TPS DRX
 */
class logOut extends controller implements action {

    public function execute() {
        $config = $this->getConfig();
        if (isset($_SESSION['user']) === TRUE) {
            unset($_SESSION['user']);
        }
        $config = $this->getConfig();
        $index = $config->getUrl().'index.php';
                header("location: $index");
                exit();
    }

}
