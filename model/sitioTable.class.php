<?php

use proyectoPortal\model\base\sitioBaseTable;

class sitioTable extends sitioBaseTable {

    public function getAll() {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT sit_id AS id, cat_id AS categoria_id, est_id AS estado_id, usu_id AS usuario_id, sit_nombre AS nombre, '
                . 'sit_descripcion AS desccripcion, sit_direccion AS direccion, '
                . 'sit_telefono AS telefono, sit_latitud AS latitud, '
                . 'sit_longitud AS longitud, sit_facebook AS facebook, '
                . 'sit_twitter AS twitter, sit_google_plus AS google_plus, sit_created_at AS created_at, '
                . 'sit_updated_at AS updated_at, sit_deleted_at AS deleted_at '
                . 'FROM bdp_sitio '
                . 'WHERE sit_deleted_at IS NULL '
                . 'ORDER BY sit_created_at ASC';
        $answer = $conn->prepare($sql);
        $answer->execute();
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function getById($id = NULL) {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT sit_id AS id, cat_id AS categoria_id, est_id AS estado_id, usu_id AS usuario_id, sit_nombre AS nombre, '
                . 'sit_descripcion AS desccripcion, sit_direccion AS direccion, '
                . 'sit_telefono AS telefono, sit_latitud AS latitud, '
                . 'sit_longitud AS longitud, sit_facebook AS facebook, '
                . 'sit_twitter AS twitter, sit_google_plus AS google_plus, sit_created_at AS created_at, '
                . 'sit_updated_at AS updated_at, sit_deleted_at AS deleted_at '
                . 'FROM bdp_sitio '
                . 'WHERE sit_deleted_at IS NULL '
                . 'AND sit_id = :id';
        $params = array(
            ':id' => ($id !== NULL) ? $id : $this->getById()
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function save() {
        $conn = $this->getConnection($this->config);
        $sql = 'INSERT INTO usuario '
                . '(sit_id, cat_id, est_id, usu_id, sit_nombre, sit_descripcion, sit_direccion, sit_telefono, sit_latitud, sit_longitud, sit_facebook, sit_twitter, sit_google_plus) '
                . 'VALUES (:id, :categoria_id, :estado_id, :usuario_id, :nombre, :descripcion, :direccion, :telefono, :latitud, :longitud, :facebook, :twitter, :google_plus)';
        $params = array(
            ':id' => $this->getId(),
            ':categoria_id' => $this->getCategoriaId(),
            ':estado_id' => $this->getEstadoId(),
            ':usuario_id' => $this->getUsuarioId(),
            ':nombre' => $this->getNombre(),
            ':descripcion' => $this->getDescripcion(),
            ':direccion' => $this->getDireccion(),
            ':telefono' => $this->getTelefono(),
            ':latitud' => $this->getLatitud(),
            ':longitud' => $this->getLongitud(),
            ':facebook' => $this->getFacebook(),
            ':twitter' => $this->getTwitter(),
            ':google_plus' => $this->getGooglePlus()
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        $this->setId($conn->lastInsertId());
        return TRUE;
    }

    public function update() {
        $conn = $this->getConnection($this->config);
        $sql = 'UPDATE bdp_sitio SET '
                . 'cat_id = :categoria_id, '
                . 'est_id = :estado_id, '
                . 'usu_id = :usuario_id, '
                . 'sit_nombre = :nombre, '
                . 'sit_descripcion = :descripcion, '
                . 'sit_direccion = :direccion, '
                . 'sit_telefono = :telefono, '
                . 'sit_latitud = :latitud, '
                . 'sit_longitud = :longitud, '
                . 'sit_facebook = :facebook, '
                . 'sit_twitter = :twitter, '
                . 'sit_google_plus = :googleplus '
                . 'WHERE sit_id = :id';
        $params = array(
            ':categoria_id' => $this->getCategoriaId(),
            ':estado_id' => $this->getEstado_id(),
            ':usuario_id' => $this->getUsuario_id(),
            ':nombre' => $this->getNombre(),
            ':descripcion' => $this->getDescripcion(),
            ':direccion' => $this->getDireccion(),
            ':telefono' => $this->getTelefono(),
            ':latitud' => $this->getLatitud(),
            ':longitud' => $this->getLongitud(),
            ':facebook' => $this->getFacebook(),
            ':twitter' => $this->getTwitter(),
            ':googleplus' => $this->getGoogleplus(),
            ':id' => $this->getId(),
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return true;
    }

    public function delete($deleteLogical = true) {
        $conn = $this->getConnection($this->config);
        $params = array(
            ':id' => $this->getId()
        );
        switch ($deleteLogical) {
            case true:
                $sql = 'UPDATE bdp_sitio SET sit_deleted_at = now() WHERE sit_id = :id';
                break;
            case false:
                $sql = 'DELETE FROM bdp_sitio WHERE sit_id = :id';
                break;
            default:
                throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
        }
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return true;
    }

}
