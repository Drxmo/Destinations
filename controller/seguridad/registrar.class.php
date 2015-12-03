<?php

require_once '../model/base/usuarioBaseTable.class.php';
require_once '../model/usuarioTable.class.php';
require_once '../model/base/datoUsuarioBaseTable.class.php';
require_once '../model/datoUsuarioTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

class registrar extends controller implements action {

  public function execute() {
    $config = $this->getConfig();
    $index=$config->getUrl().'index.php';
    
    if(isset($_SESSION['user'])===TRUE){
      header("Location: $index");
      exit();
    }elseif (filter_has_var(INPUT_POST, 'registro') !== TRUE) {
      $registro = filter_input_array(INPUT_POST)['registro'];
//      $this->validateInsert($registro);

      $usuario = new usuarioTable($config);
      $usuario->setUsuario($registro['nick']);
      $usuario->setPassword($registro['pass']);
      $usuario->save();
     
      $datoUsuario = new datoUsuarioTable($config);
      $datoUsuario->setUsuarioId($Usuario->getId());
      $datoUsuario->setNombre($registro['nombre']);
      $datoUsuario->setApellidos($registro['apellidos']);
      $datoUsuario->setCorreo($registro['email']);
      $datoUsuario->setFechaNacimiento($registro['fecha']);
      $datoUsuario->setGenero($registro['genero']);
      $datoUsuario->save();
      $_SESSION['registroSuccess'] = 'Usuario registrado exitosamente';
    }
      header("Location: $index");
      exit();
  }
      private function validateInsert($registro){} 
      
      }
  


