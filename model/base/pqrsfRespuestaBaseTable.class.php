<?php

namespace portalPoyecto\model\base;

use FStudio \fsModel as model;
use FStudio \myConfig as config;

class pqrsfRespuestaBaseTable extends model {

    const ID = 'res_id ';
    const PQRSF_ID = 'pqrsf_id ';
    const USUARIO_ID = 'usu_id ';
    const RESPUESTA = 'res_respuesta';
    const CREATED_AT = 'res_created_at';
    const UPDATE_AT = 'res_updated_at';
    const DELETED_AT = 'res_deleted_at';
    const _TABLE = 'bdp_pqrsf_respuesta';

    /**
     * Configuracion del sistema 
     * @var config 
     */
    protected $config;
    private $id;
    private $pqrsf_id;
    private $usuario_id;
    private $respuesta;
    private $created_at;
    private $updated_at;
    private $deleted_at;

    public function __construct(config $config, $id = null, $pqrsf_id = null, $usuario_id = null, $respuesta = null, $created_at = null, $updated_at = null, $deleted_at = null) {
        $this->config = $config;
        $this->id = $id;
        $this->pqrsf_id = $pqrsf_id;
        $this->usuario_id = $usuario_id;
        $this->respuesta = $respuesta;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->deleted_at = $deleted_at;
    }

    public function getId() {
        return $this->id;
    }

    public function getPqrsfId() {
        return $this->pqrsf_id;
    }

    public function getUsuarioId() {
        return $this->usuario_id;
    }

    public function getRespuesta() {
        return $this->respuesta;
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

    public function setPqrsfId($pqrsf_id) {
        $this->pqrsf_id = $pqrsf_id;
    }

    public function setUsuarioId($usuario_id) {
        $this->usuario_id = $usuario_id;
    }

    public function setRespuesta($respuesta) {
        $this->respuesta = $respuesta;
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
