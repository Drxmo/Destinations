<?php

use proyectoPortal\model\base\categoriaBaseTable;

class categoriaTable extends categoriaBaseTable {

    public function getAll() {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT cat_id AS id, cat_cat_id AS categoria_id, cat_nonmbre AS nombre, '
                . 'cat_activo AS activo, '
                . 'cat_created_at AS created_at, '
                . 'cat_updated_at AS updated_at, cat_deleted_at AS deleted_at '
                . 'FROM bdp_categoria '
                . 'WHERE cat_deleted_at IS NULL '
                . 'ORDER BY cat_created_at ASC';
        $answer = $conn->prepare($sql);
        $answer->execute();
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function getById($id = NULL) {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT cat_id AS id, cat_cat_id AS categoria_id, cat_nonmbre AS nombre, '
                . 'cat_activo AS activo, '
                . 'cat_created_at AS created_at, '
                . 'cat_updated_at AS updated_at, cat_deleted_at AS deleted_at '
                . 'FROM bdp_categoria '
                . 'WHERE cat_deleted_at IS NULL '
                . 'AND cat_id = :id';
        $params = array(
            ':id' => ($id !== NULL) ? $id : $this->getById()
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function save() {
        $conn = $this->getConnection($this->config);
        $sql = 'INSERT INTO categoria '
                . '(cat_id, cat_cat_id, cat_nombre, cat_activo) '
                . 'VALUES (:id, :categoria_id, :nombre, :activo)';
        $params = array(
            ':id' => $this->getId(),
            ':categoria_id' => $this->getCategoriaId(),
            ':nombre' => $this->getNombre(),
            ':activo' => $this->getActivo(),
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        $this->setId($conn->lastInsertId());
        return TRUE;
    }

    public function update() {
        $conn = $this->getConnection($this->config);
        $sql = 'UPDATE bdp_categoria SET '
                . 'cat_cat_id = :categoria_id, '
                . 'cat_nombre = :nombre, '
                . 'cat_activo = :activo, '
                . 'WHERE cat_id = :id';
        $params = array(
            ':categoria_id' => $this->getCategoriaId(),
            ':nombre' => $this->getNombre(),
            ':activo' => $this->getActivo(),
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
                $sql = 'UPDATE bdp_categoria SET cat_deleted_at = now() WHERE cat_id = :id';
                break;
            case false:
                $sql = 'DELETE FROM bdp_categoria WHERE cat_id = :id';
                break;
            default:
                throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
        }
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return true;
    }

}
