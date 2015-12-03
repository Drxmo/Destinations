<?php

use portalProject\model\base\imagenBaseTable;

/**
 * Description of imagenTable
 *
 * @author balem
 */
class imagenTable extends imagenBaseTable {

    public function getAll() {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT img_id AS id, eve_id AS evento_id, sit_id AS sitio_id, '
                . 'img_ruta AS ruta, img_create_at AS created_at '
                . 'FROM bdp_dato_usuario '
                . 'ORDER BY img_created_at ASC';
        $answer = $conn->prepare($sql);
        $answer->execute();
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function getById($id = null) {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT img_id AS id, eve_id AS evento_id, sit_id AS sitio_id, '
                . 'img_ruta AS ruta, img_create_at AS created_at '
                . 'FROM bdp_dato_usuario '
                . 'AND img_id = :id';
        $params = array(
            ':id' => ($id !== NULL) ? $id : $this->getById()
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function save() {
        $conn = $this->getConnection($this->config);
        $sql = 'INSERT INTO imagen '
                . '(img_id, eve_id, sit_id, img_ruta) '
                . 'VALUES (:id, :evento_id, :sitio_id, :ruta)';
        $params = array(
            ':id' => $this->getId(),
            ':evento_id' => $this->getEventoId(),
            ':sitio_id' => $this->getSitioId(),
            ':ruta' => $this->getRuta()
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        $this->setId($conn->lastInsertId());
        return TRUE;
    }

    public function update() {
        $conn = $this->getConnection($this->config);
        $sql = 'UPDATE bdp_imagen SET '
                . 'eve_id = :evento_id, '
                . 'sit_id = :sitio_id, '
                . 'img_ruta = :ruta '
                . 'WHERE img_id = :id';
        $params = array(
            ':evento_id' => $this->getEventoId(),
            ':sitio_id' => $this->getSitioId(),
            ':ruta' => $this->getRuta(),
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
                $sql = 'UPDATE bdp_imagen SET deleted_at = now() WHERE img_id = :id';
                break;
            case false:
                $sql = 'DELETE FROM bdp_imagen WHERE img_id = :id';
                break;
            default:
                throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
        }
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return true;
    }

}
