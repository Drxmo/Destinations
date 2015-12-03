<?php

namespace portalPoyecto\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

class categoriaBaseTable extends model {

    const ID = 'cat-id';
    const CATEGORIA_ID = 'cat_cat_id';
    const NOMBRE = 'cat_nombre';
    const NOMBRE_LENGTH = 80;
    const ACTIVADO = 'cat_activo';
    const CREATED_AT = 'cat_created_at';
    const UPDATED_AT = 'cat_updated_at';
    const DELETED_AT = 'cat_deleted_at';
    const _TABLE = 'bdp_categoria';

    /**
     * Configuración del sistema
     * @var config
     */
    protected $config;
    private $id;
    private $categoria_id;
    private $nombre;
    private $activo;
    private $created_at;
    private $updated_at;
    private $deleted_at;

    public function __construct(config $config = NULL, $id = NULL, $categoria_id = NULL, $nombre = NULL, $activo = NULL, $created_at = NULL, $updated_at = NULL, $deleted_at = NULL) {
        $this->config = $config;
        $this->id = $id;
        $this->categoria_id = $categoria_id;
        $this->nombre = $nombre;
        $this->activo = $activo;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->deleted_at = $deleted_at;
    }

    public function getConfig() {
        return $this->config;
    }

    public function getId() {
        return $this->id;
    }

    public function getCategoriaId() {
        return $this->categoria_id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getActivo() {
        return $this->activo;
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

    public function setCategoriaId($categoria_id) {
        $this->categoria_id = $categoria_id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setActivo($activo) {
        $this->activo = $activo;
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
