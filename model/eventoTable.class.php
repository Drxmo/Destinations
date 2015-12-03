<?php

use proyectoPortal\model\base\eventoBaseTable;

class eventoTable extends eventoBaseTable {

    public function getAll() {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT eve_id AS id, cat_id AS categoria_id, est_id AS estado_id, usu_id AS usuario_id, eve_nombre AS nombre, '
                . 'eve_fecha_hora AS fecha_hora, eve_correo_contacto AS correo_contacto, eve_direccion AS direccion, '
                . 'eve_nombre_contacto AS nombre_contacto, eve_telefono_contacto AS telefono_contacto, '
                . 'eve_valor_boleta AS valor_boleta, eve_latitud AS latitud, '
                . 'eve_longitud AS longitud, fecha_inicio_publicacion AS fecha_inicio_publicacion, fecha_fin_publicacion AS fecha_fin_publicacion, '
                . 'eve_updated_at AS updated_at, eve_deleted_at AS deleted_at '
                . 'FROM bdp_evento '
                . 'WHERE eve_deleted_at IS NULL '
                . 'ORDER BY eve_created_at ASC';
        $answer = $conn->prepare($sql);
        $answer->execute();
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function getById($id = NULL) {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT eve_id AS id, cat_id AS categoria_id, est_id AS estado_id, usu_id AS usuario_id, eve_nombre AS nombre, '
                . 'eve_fecha_hora AS fecha_hora, eve_correo_contacto AS correo_contacto, eve_direccion AS direccion, '
                . 'eve_nombre_contacto AS nombre_contacto, eve_telefono_contacto AS telefono_contacto, '
                . 'eve_valor_boleta AS valor_boleta, eve_latitud AS latitud, '
                . 'eve_longitud AS longitud, fecha_inicio_publicacion AS fecha_inicio_publicacion, fecha_fin_publicacion AS fecha_fin_publicacion, '
                . 'eve_updated_at AS updated_at, eve_deleted_at AS deleted_at '
                . 'FROM bdp_evento '
                . 'WHERE eve_deleted_at IS NULL '
                . 'AND eve_id = :id';
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
                . '(eve_id, cat_id, est_id, usu_id, eve_nombre, eve_fecha_hora, eve_direccion, eve_nombre_contacto, eve_correo_contacto, eve_telefono_contacto, eve_valor_boleta, eve_latitud, eve_longitud, fecha_inicio_publicacion, fecha_fin_publicacion) '
                . 'VALUES (:id, :categoria_id, :estado_id, :usuario_id, :nombre, :fecha_hora, :direccion, :nombre_contacto, :correo_contacto, :telefono_contacto, :valor_boleta, :latitud, :longitud, :fecha_inicio_publicacion, :fecha_fin_publicacion)';
        $params = array(
            ':id' => $this->getId(),
            ':categoria_id' => $this->getCategoria_id(),
            ':estado_id' => $this->getEstado_id(),
            ':usuario_id' => $this->getUsuario_id(),
            ':nombre' => $this->getNombre(),
            ':fecha_hora' => $this->getFecha_hora(),
            ':direccion' => $this->getDireccion(),
            ':nombre_contacto' => $this->getNombre_contacto(),
            ':correo_contacto' => $this->getCorreo_contacto(),
            ':telefono_contacto' => $this->getTelefono_contacto(),
            ':valor_boleta' => $this->getValor_boleta(),
            ':latitud' => $this->getLatitud(),
            ':longitud' => $this->getLongitud(),
            ':fecha_inicio_publicacion' => $this->getFecha_inicio_publicacion(),
            ':fecha_fin_publicacion' => $this->getFecha_fin_publicacion()
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        $this->setId($conn->lastInsertId());
        return TRUE;
    }

    public function update() {
        $conn = $this->getConnection($this->config);
        $sql = 'UPDATE bd_usuario SET '
                . 'cat_id = :categoria_id, '
                . 'est_id = :estado_id, '
                . 'usu_id = :usuario_id, '
                . 'eve_nombre = :nombre '
                . 'eve_fecha_hora = :fecha_hora, '
                . 'eve_direccion = :direccion, '
                . 'eve_nombre_contacto = :nombre_contacto, '
                . 'eve_correo_contacto = :correo_contacto, '
                . 'eve_telefono_contacto = :telefono_contacto '
                . 'eve_valor_boleta = :valor_boleta, '
                . 'eve_latitud = :latitud, '
                . 'eve_longitud = :longitud, '
                . 'fecha_inicio_publicacion = :fecha_inicio_publicacion, '
                . 'fecha_fin_publicacion = :fecha_fin_publicacion '
                . 'WHERE eve_id = :id';
        $params = array(
            ':categoria_id' => $this->getCategoria_id(),
            ':estado_id' => $this->getEstado_id(),
            ':usuario_id' => $this->getUsuario_id(),
            ':nombre' => $this->getNombre(),
            ':fecha_hora' => $this->getFecha_hora(),
            ':direccion' => $this->getDireccion(),
            ':nombre_contacto' => $this->getNombre_contacto(),
            ':correo_contacto' => $this->getCorreo_contacto(),
            ':telefono_contacto' => $this->getTelefono_contacto(),
            ':valor_boleta' => $this->getValor_boleta(),
            ':latitud' => $this->getLatitud(),
            ':longitud' => $this->getLongitud(),
            ':fecha_inicio_publicacion' => $this->getFecha_inicio_publicacion(),
            ':fecha_fin_publicacion' => $this->getFecha_fin_publicacion(),
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
                $sql = 'UPDATE bdp_evento SET eve_deleted_at = now() WHERE eve_id = :id';
                break;
            case false:
                $sql = 'DELETE FROM bdp_evento WHERE eve_id = :id';
                break;
            default:
                throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
        }
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return true;
    }

}
