<?php

use portalProject\model\base\pqrsfRespuestaBaseTable;

/**
 * Description of pqrsfRespuestaTable
 *
 * @author balem
 */
class pqrsfRespuestaTable extends pqrsfRespuestaBaseTable {

    public function getAll() {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT res_id AS id, pqrsf_id AS pqrsf_id, usu_id AS usuario_id, '
                . 'res_respuesta as respuesta, res_created_at as created_at, '
                . 'res_updated_at as updated_at, res_deleted_at as deleted_at, '
                . 'FROM bdp_pqrsf_respuesta '
                . 'WHERE res_deleted_at IS NULL '
                . 'ORDER BY res_created_at ASC';
        $answer = $conn->prepare($sql);
        $answer->execute();
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function getById($id = null) {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT res_id AS id, pqrsf_id AS pqrsf_id, usu_id AS usuario_id, '
                . 'res_respuesta as respuesta, res_created_at as created_at, '
                . 'res_updated_at as updated_at, res_deleted_at as deleted_at, '
                . 'FROM bdp_pqrsf_respuesta '
                . 'WHERE res_deleted_at IS NULL '
                . 'AND res_id = :id';
        $params = array(
            ':id' => ($id !== NULL) ? $id : $this->getById()
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function save() {
        $conn = $this->getConnection($this->config);
        $sql = 'INSERT INTO pqrsf_respuesta '
                . '(res_id, pqrsf_id, usu_id, res_respuesta) '
                . 'VALUES (:id, :pqrsf_id, :usuario_id, :respuesta)';
        $params = array(
            ':id' => $this->getId(),
            ':pqrsf_id' => $this->getPqrsfId(),
            ':usuario_id' => $this->getUsuarioId(),
            ':respuesta' => $this->getRespuesta()
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        $this->setId($conn->lastInsertId());
        return TRUE;
    }

    public function update() {
        $conn = $this->getConnection($this->config);
        $sql = 'UPDATE bdp_pqrsf_respuesta SET '
                . 'pqrsf_id = :pqrsf_id, '
                . 'usu_id = :usuario_id, '
                . 'res_respuesta = :respuesta, '
                . 'WHERE res_id = :id';
        $params = array(
            ':pqrsf_id' => $this->getPqrsfId(),
            ':usuario_id' => $this->getUsuarioId(),
            ':respuesta' => $this->getRespuesta(),
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
                $sql = 'UPDATE bdp_pqrsf_respuesta SET res_deleted_at = now() WHERE res_id = :id';
                break;
            case false:
                $sql = 'DELETE FROM bdp_pqrsf_respuesta WHERE res_id = :id';
                break;
            default:
                throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
        }
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return true;
    }

}
