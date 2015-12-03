<?php

namespace portalPoyecto\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

class sitioBaseTable extends model {

    const ID = 'sit_id';
    const CATEGORIA_ID = 'cat_id';
    const ESTADO_ID = 'est_id';
    const USUARIO_ID = 'usu_id';
    const NOMBRE = 'sit_nombre';
    const NOMBRE_LENGTH = 80;
    const DESCRIPCION = 'sit_descripcion';
    const DIRECCION = 'sit_direccion';
    const DIRECCION_LENGTH = 100;
    const TELEFONO = 'sit_telefono';
    const TELEFONO_LENGTH = 40;
    const LATITUD = 'sit_latitud';
    const LATITUD_LENGTH = 70;
    const LONGITUD = 'sit_longitud';
    const LONGITUD_LENGTH = 70;
    const FACEBOOK = 'sit_facebook';
    const FACEBOOK_LENGTH = 80;
    const TWITTER = 'sit_twitter';
    const TWITTER_LENGTH = 80;
    const GOOGLE_PLUS = 'sit_google_plus';
    const GOOGLE_PLUS_LENGTH = 80;
    const CREATED_AT = 'sit_created_at';
    const UPDATED_AT = 'sit_updated_at';
    const DELETED_AT = 'sit_deleted_at';
    const _TABLE = 'bdp_sitio';

    /**
     * Configuración del sistema
     * @var config
     */
    protected $config;
    private $id;
    private $categoria_id;
    private $estado_id;
    private $usuario_id;
    private $nombre;
    private $descripcion;
    private $direccion;
    private $telefono;
    private $latitud;
    private $longitud;
    private $facebook;
    private $twitter;
    private $google_plus;
    private $created_at;
    private $updated_at;
    private $deleted_at;

    public function __construct(config $config = NULL, $id = NULL, $categoria_id = NULL, $estado_id = NULL, $usuario_id = NULL, $direccion = NULL, $telefono = NULL, $latitud = NULL, $longitud = NULL, $facebook = NULL, $twitter = NULL, $google_plus = NULL, $created_at = NULL, $updated_at = NULL, $deleted_at = NULL) {
        $this->config = $config;
        $this->id = $id;
        $this->categoria_id = $categoria_id;
        $this->estado_id = $estado_id;
        $this->usuario_id = $usuario_id;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->latitud = $latitud;
        $this->longitud = $longitud;
        $this->facebook = $facebook;
        $this->twitter = $twitter;
        $this->google_plus = $google_plus;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->deleted_at = $deleted_at;
    }

    public function getId() {
        return $this->id;
    }

    public function getCategoriaId() {
        return $this->categoria_id;
    }

    public function getEstadoId() {
        return $this->estado_id;
    }

    public function getUsuarioId() {
        return $this->usuario_id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getLatitud() {
        return $this->latitud;
    }

    public function getLongitud() {
        return $this->longitud;
    }

    public function getFacebook() {
        return $this->facebook;
    }

    public function getTwitter() {
        return $this->twitter;
    }

    public function getGooglePlus() {
        return $this->google_plus;
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

    public function setEstadoId($estado_id) {
        $this->estado_id = $estado_id;
    }

    public function setUsuarioId($usuario_id) {
        $this->usuario_id = $usuario_id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setLatitud($latitud) {
        $this->latitud = $latitud;
    }

    public function setLongitud($longitud) {
        $this->longitud = $longitud;
    }

    public function setFacebook($facebook) {
        $this->facebook = $facebook;
    }

    public function setTwitter($twitter) {
        $this->twitter = $twitter;
    }

    public function setGooglePlus($google_plus) {
        $this->google_plus = $google_plus;
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
