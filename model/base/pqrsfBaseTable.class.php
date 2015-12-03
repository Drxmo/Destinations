<?php

namespace portalPoyecto\model\base;

use FStudio \fsModel as model;
use FStudio \myConfig as config;

class pqrsfBaseTable extends model {

    const ID = 'pqrsf_id';
    const USUARIO_ID = 'usu_id';
    const ESTADO_ID = 'est_id';
    const MENSAJE = 'pqrsf_mensaje';
    const CREATED_AT = 'pqrsf_created_at';
    const UPDATE_AT = 'pqrsf_updated_at';
    const DELETED_AT = 'pqrsf_deleted_at';
    const _TABLE = 'bdp_pqrsf';

    /**
     * Configuracion del sistema 
     * @var config 
     */
    protected $config;
    private $id;
    private $usuario_id;
    private $estado_id;
    private $mensaje;
    private $created_at;
    private $updated_at;
    private $deleted_at;

    public function __construct(config $config, $id = null, $usuario_id = null, $estado_id = null, $mensaje = null, $created_at = null, $updated_at = null, $deleted_at = null) {
        $this->config = $config;
        $this->id = $id;
        $this->usuario_id = $usuario_id;
        $this->estado_id = $estado_id;
        $this->mensaje = $mensaje;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->deleted_at = $deleted_at;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsuarioId() {
        return $this->usuario_id;
    }

    public function getEstadoId() {
        return $this->estado_id;
    }

    public function getMensaje() {
        return $this->mensaje;
    }

    public function getCreatedAt() {
        return $this->created_at;
    }

    public function getUpdatedAt() {
        return $this->updated_at;
    }

    public function getDeletedAt() {
        return $this->deleted_at;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setUsuarioId($usuario_id) {
        $this->usuario_id = $usuario_id;
    }

    public function setEstadoId($estado_id) {
        $this->estado_id = $estado_id;
    }

    public function setMensaje($mensaje) {
        $this->mensaje = $mensaje;
    }

    public function setCreatedAt($created_at) {
        $this->created_at = $created_at;
    }

    public function setUpdatedAt($updated_at) {
        $this->updated_at = $updated_at;
    }

    public function setDeletedAt($deleted_at) {
        $this->deleted_at = $deleted_at;
    }

}
