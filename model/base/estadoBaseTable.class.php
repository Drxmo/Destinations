<?php

namespace portalPoyecto\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

class sitioBaseTable extends model {

    const ID = 'est_id';
    const NOMBRE = 'est_nombre';
    const NOMBRE_LENGTH = 50;
    const CREATED_AT = 'est_created_at';
    const UPDATED_AT = 'est_updated_at';
    const _TABLE = 'bdp_estado';

    /**
     * Configuración del sistema
     * @var config
     */
    protected $config;
    private $id;
    private $nombre;
    private $created_at;
    private $updated_at;

    public function __construct(config $config = NULL, $id = NULL, $nombre = NULL, $created_at = NULL, $updated_at = NULL) {
        $this->config = $config;
        $this->id = $id;
        $this->nombre = $nombre;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getCreatedAt() {
        return $this->created_at;
    }

    public function getUpdatedAt() {
        return $this->updated_at;
    }

    public function setConfig(config $config) {
        $this->config = $config;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setCreatedAt($created_at) {
        $this->created_at = $created_at;
    }

    public function setUpdatedAt($updated_at) {
        $this->updated_at = $updated_at;
    }

}
