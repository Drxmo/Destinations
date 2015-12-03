<?php

use proyectoPortal\model\base\estadoBaseTable;

class estadoTable extends estadoBaseTable {

    public function getAll() {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT est_id AS id, est_nombre AS nombre, '
                . 'est_created_at AS created_at, '
                . 'est_updated_at AS updated_at, '
                . 'FROM bdp_estado '
                . 'WHERE est_deleted_at IS NULL '
                . 'ORDER BY est_created_at ASC';
        $answer = $conn->prepare($sql);
        $answer->execute();
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function getById($id = NULL) {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT est_id AS id, est_nombre AS nombre, '
                . 'est_created_at AS created_at, '
                . 'est_updated_at AS updated_at, '
                . 'FROM bdp_estado '
                . 'WHERE est_deleted_at IS NULL '
                . 'AND est_id = :id';
        $params = array(
            ':id' => ($id !== NULL) ? $id : $this->getById()
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function save() {
        $conn = $this->getConnection($this->config);
        $sql = 'INSERT INTO estado '
                . '(est_id, est_nombre) '
                . 'VALUES (:id, :nombre)';
        $params = array(
            ':id' => $this->getId(),
            ':nombre' => $this->getNombre(),
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        $this->setId($conn->lastInsertId());
        return TRUE;
    }

    public function update() {
        $conn = $this->getConnection($this->config);
        $sql = 'UPDATE bdp_estado SET '
                . 'est_nombre = :nombre, '
                . 'WHERE est_id = :id';
        $params = array(
            ':nombre' => $this->getNombre(),
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
                $sql = 'UPDATE bdp_estado SET est_deleted_at = now() WHERE est_id = :id';
                break;
            case false:
                $sql = 'DELETE FROM bdp_estado WHERE est_id = :id';
                break;
            default:
                throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
        }
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return true;
    }

}
