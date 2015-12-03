<?php
use FStudio\fsController as controller;
/**
 * Description of indexUsuario
 *
 * @author 
 */
class indexUsuario extends controller {
public function execute() {
    $this->defineView('home/usuario', 'indexUsuario', 'html');
  }
}
