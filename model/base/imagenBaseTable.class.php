<?php

namespace portalProject\model\base;

use portalProject\fsModel as model;
use portalProject\myConfig as config;

/**
 * Description of imagenBaseTable
 *
 * @author balem
 */
class imagenBaseTable extends model {

    const ID = 'img_id';
    const EVENTO_ID = 'eve_id';
    const SITIO_ID = 'sit_id';
    const RUTA = 'img_ruta';
    const CREATED_AT = 'img_created_at';
    const _TABLE = 'bdp_imagen';

    /**
     * Configuración del sistema
     * @var config
     */
    protected $config;
    private $id;
    private $evento_id;
    private $sitio_id;
    private $ruta;
    private $created_at;

    public function __construct(config $config, $id = null, $evento_id = null, $sitio_id = null, $ruta = null, $created_at = null) {
        $this->config = $config;
        $this->id = $id;
        $this->evento_id = $evento_id;
        $this->sitio_id = $sitio_id;
        $this->ruta = $ruta;
        $this->created_at = $created_at;
    }

    public function getId() {
        return $this->id;
    }

    public function getEventoId() {
        return $this->evento_id;
    }

    public function getSitioId() {
        return $this->sitio_id;
    }

    public function getRuta() {
        return $this->ruta;
    }

    public function getCreatedAt() {
        return $this->created_at;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setEventoId($evento_id) {
        $this->evento_id = $evento_id;
    }

    public function setSitioId($sitio_id) {
        $this->sitio_id = $sitio_id;
    }

    public function setRuta($ruta) {
        $this->ruta = $ruta;
    }

    public function setCreatedAt($created_at) {
        $this->created_at = $created_at;
    }

}
