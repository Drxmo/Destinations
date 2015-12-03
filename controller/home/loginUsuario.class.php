<?php

require_once '../model/base/usuarioBaseTable.class.php';
require_once '../model/usuarioTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

class loginUsuario extends controller implements action {

  public function execute() {
    $config = $this->getConfig();
    if (filter_has_var(INPUT_POST, 'seguridad') === TRUE) {
      $user = filter_input_array(INPUT_POST)['seguridad']['user'];
      $password = filter_input_array(INPUT_POST)['seguridad']['pass'];

      $usuario = new usuarioTable($config);
      $usuario->setUsuario($user);
      $usuario->setPassword($password);

      if ($usuario->verificarUsuario() === TRUE) {
        $datoUsuario = $usuario->getDataByUserPassword();
        if ($datoUsuario !== FALSE) {
          $_SESSION['user']['id'] = $datoUsuario->id;
          $_SESSION['user']['nombre'] = $datoUsuario->nombre;
          header("Location:" . $config->getUrl() . "index.php");
          exit();
        } else {
          throw new Exception('Ocurrio un error usuario no existente');
        }
      } else {
        $_SESSION['usuarioInvalido'] = 'Datos de usuario son invÃ¡lidos';
        header("Location:" . $config->getUrl() . "index.php/home/seguridad/loginFormulario");
        exit();
      }
    }
    header("Location:" . $config->getUrl() . "index.php");
    exit();
  }

}
