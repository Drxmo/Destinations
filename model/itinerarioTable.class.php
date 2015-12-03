<?php

use proyectoPortal\model\base\itinerarioBaseTable;

class itinerarioTable extends itinerarioBaseTable {

    public function getAll() {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT iti_id as id, '
                . 'usu_id as usuario_id, sit_id as sitio_id, '
                . 'iti_posicion as posicion, iti_created_at as created_at, '
                . 'iti_updated_at as updated_at,iti_deleted_at as deleted_at, '
                . 'FROM bdp_itinerario '
                . 'WHERE iti_deleted_at IS NULL '
                . 'ORDER BY iti_created_at ASC';
        $answer = $conn->prepare($sql);
        $answer->execute();
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function getById($id = null) {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT iti_id as id, '
                . 'usu_id as usuario_id, sit_id as sitio_id, '
                . 'iti_posicion as posicion, iti_created_at as created_at, '
                . 'iti_updated_at as updated_at,iti_deleted_at as deleted_at, '
                . 'FROM bdp_itinerario '
                . 'WHERE iti_deleted_at IS NULL '
                . 'AND iti_id = :id';
        $params = array(
            ':id' => ($id !== NULL) ? $id : $this->getById()
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function save() {
        $conn = $this->getConnection($this->config);
        $sql = 'INSERT INTO bdp_itinerario '
                . '(iti_id, 
                   usu_id, 
                   sit_id, 
                   iti_posicion)'
                . 'VALUES (:id, :usuario_id, :sitio_id, :posicion)';
        $params = array(
            ':id' => $this->getid(),
            ':usuario_id' => $this->getUsuarioId(),
            ':sitio_id' => $this->getSitioId(),
            ':posicion' => $this->getPosicion()
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        $this->setId($conn->lastInsertId());
        return TRUE;
    }

    public function update() {
        $conn = $this->getConnection($this->config);
        $sql = 'UPDATE bdp_itinerario SET ' .
                'usu_id = :usuario_id, ' .
                'sit_id = :sitio_id, ' .
                'iti_posicion = :posicion '
                . 'WHERE iti_id = :id';
        $params = array(
            ':usuario_id' => $this->getUsuarioId(),
            ':sitio_id' => $this->getSitioId(),
            ':posicion' => $this->getPosicion(),
            ':id' => $this->getId()
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
                $sql = 'UPDATE bdp_itinerario SET iti_deleted_at = now() WHERE iti_id = :id';
                break;
            case false:
                $sql = 'DELETE FROM bdp_itinerario WHERE iti_id = :id';
                break;
            default:
                throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
        }
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return true;
    }

}
