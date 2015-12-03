<?php
/**
 * Description of index
 *
 * @author Drx
 */
require_once '../model/base/usuarioBaseTable.class.php';
require_once '../model/usuarioTable.class.php';
require_once '../model/base/datoUsuarioBaseTable.class.php';
require_once '../model/datoUsuarioTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

class registro extends controller implements action{

    public function execute() {
        $config = $this->getConfig();
        if (isset($_SESSION['user']) === true) {
            $index = $config->getUrl() . 'index.php';
            header("Location: $index");
            exit();
        } else {
            
            $this->btCSS = $config->getUrl() . 'css/bootstrap.min.css';
            $this->bttCSS = $config->getUrl() . 'css/bootstrap-theme.min.css';
            $this->signinCSS = $config->getUrl() . 'css/signin.css';
            $this->jqJS = $config->getUrl() . 'css/jquery-1.11.3.min.js';
            $this->btJS = $config->getUrl() . 'css/bootstrap.min.js';
            $this->registroForm = $config->getUrl() . 'index.php/home/seguridad/registrar';
            $this->homeURL = $config->getUrl() . 'index.php';
            $this->registroURL = $config->getUrl() . 'index.php/home/seguridad/registro';

            $this->defineView('home/seguridad', 'registroForm', 'html');
//    include '../../view/home/seguridad/loginUsuario.html.php';
        }
    }

}
