<?php

use portalProject\model\base\pqrsfBaseTable;

/**
 * Description of pqrsfTable
 *
 * @author balem
 */
class pqrsfTable extends pqrsfBaseTable {

    public function getAll() {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT pqrsf_id AS id, usu_id AS usuario_id, est_id AS estado_id, '
                . 'pqrsf_mensaje as mensaje, pqrsf_created_at as created_at, '
                . 'pqrsf_updated_at as updated_at, pqrsf_deleted_at as deleted_at, '
                . 'FROM bdp_pqrsf '
                . 'WHERE pqrsf_deleted_at IS NULL '
                . 'ORDER BY pqrsf_created_at ASC';
        $answer = $conn->prepare($sql);
        $answer->execute();
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function getById($id = null) {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT pqrsf_id AS id, usu_id AS usuario_id, est_id AS estado_id, '
                . 'pqrsf_mensaje as mensaje, pqrsf_created_at as created_at, '
                . 'pqrsf_updated_at as updated_at, pqrsf_deleted_at as deleted_at, '
                . 'FROM bdp_pqrsf '
                . 'WHERE pqrsf_deleted_at IS NULL '
                . 'AND pqrsf_id = :id';
        $params = array(
            ':id' => ($id !== NULL) ? $id : $this->getById()
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function save() {
        $conn = $this->getConnection($this->config);
        $sql = 'INSERT INTO pqrsf '
                . '(pqrsf_id, usu_id, est_id, pqrsf_mensaje) '
                . 'VALUES (:id, :usuario_id, :estado_id, :mensaje)';
        $params = array(
            ':id' => $this->getId(),
            ':usuario_id' => $this->getUsuarioId(),
            ':estado_id' => $this->getEstadoId(),
            ':mensaje' => $this->getMensaje()
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        $this->setId($conn->lastInsertId());
        return TRUE;
    }

    public function update() {
        $conn = $this->getConnection($this->config);
        $sql = 'UPDATE bdp_pqrsf SET '
                . 'usu_id = :usuario_id, '
                . 'est_id = :estado_id, '
                . 'pqrsf_mensaje = :mensaje, '
                . 'WHERE pqrsf_id = :id';
        $params = array(
            ':usuario_id' => $this->getUsuarioId(),
            ':estado_id' => $this->getEstadoId(),
            ':mensaje' => $this->getMensaje(),
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
                $sql = 'UPDATE bdp_pqrsf SET pqrsf_deleted_at = now() WHERE pqrsf_id = :id';
                break;
            case false:
                $sql = 'DELETE FROM bdp_pqrsf WHERE pqrsf_id = :id';
                break;
            default:
                throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
        }
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return true;
    }

}
