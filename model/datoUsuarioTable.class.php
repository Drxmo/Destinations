<?php

use FStudio\model\base\datoUsuarioBaseTable;

/**
 * Description of datoUsuarioTable
 *
 * @author balem
 */
class datoUsuarioTable extends datoUsuarioBaseTable {

    public function getAll() {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT dus_id AS id, usu_id AS usuario_id, dus_nombre AS nombre, '
                . 'dus_apellidos AS apellidos, dus_correo AS correo, dus_genero AS genero, '
                . 'dus_fecha_nacimiento AS fecha_nacimiento, dus_facebook AS facebook, '
                . 'dus_twitter AS twitter, dus_google_plus AS google_plus, '
                . 'dus_avatar AS avatar, dus_create_at AS created_at, dus_updated_at AS updated_at, '
                . 'dus_deleted_at AS deleted_at '
                . 'FROM bdp_dato_usuario WHERE dus_deleted_at IS NULL '
                . 'ORDER BY dus_created_at ASC';

        $answer = $conn->prepare($sql);
        $answer->execute();
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function getById($id = NULL) {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT dus_id AS id, usu_id AS usuario_id, dus_nombre AS nombre, '
                . 'dus_apellidos AS apellidos, dus_correo AS correo, dus_genero AS genero, '
                . 'dus_fecha_nacimiento AS fecha_nacimiento, dus_facebook AS facebook, '
                . 'dus_twitter AS twitter, dus_google_plus AS google_plus, '
                . 'dus_avatar AS avatar, dus_create_at AS created_at, dus_updated_at AS updated_at, '
                . 'dus_deleted_at AS deleted_at '
                . 'FROM bdp_dato_usuario WHERE dus_deleted_at IS NULL '
                . 'AND dus_id = :id';
        $params = array(
            ':id' => ($id !== NULL) ? $id : $this->getById()
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function save() {
        $conn = $this->getConnection($this->config);
        $sql = 'INSERT INTO bdp_dato_usuario '
                . '(dus_id, usu_id, dus_nombre, dus_apellidos, dus_correo, dus_genero, dus_fecha_nacimiento, dus_facebook, '
                . 'dus_twitter, dus_google_plus, dus_avatar) '
                . 'VALUES (:id, :usuario_id, :nombre, :apellidos, :correo, :genero, '
                . ':fecha_nacimiento, :facebook, :twitter, :google_plus, :avatar)';
        $params = array(
            ':id' => $this->getId(),
            ':usuario_id' => $this->getUsuarioId(),
            ':nombre' => $this->getNombre(),
            ':apellidos' => $this->getApellidos(),
            ':correo' => $this->getCorreo(),
            ':genero' => $this->getGenero(),
            ':fecha_nacimiento' => $this->getFechaNacimiento(),
            ':facebook' => $this->getFacebook(),
            ':twitter' => $this->getTwitter(),
            ':google_plus' => $this->getGooglePlus(),
            ':avatar' => $this->getAvatar()
        );
        echo $this->getUsuarioId();
        exit();
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        $this->setId($conn->lastInsertId());
        return TRUE;
    }

    public function update() {
        $conn = $this->getConnection($this->config);
        $sql = 'UPDATE usuario SET '
                . 'usu_id = :usuario_id, dus_nombre = :nombre, '
                . 'dus_apellidos = :apellidos, dus_correo = :correo, '
                . 'dus_genero = :genero, dus_fecha_nacimiento = :fecha_nacimiento, '
                . 'dus_facebook = :facebook, dus_twitter = :twitter, '
                . 'dus_google_plus = :google_plus, dus_avatar = :avatar, '
                . 'WHERE dus_id = :id';
        $params = array(
            ':usuario_id' => $this->getUsuarioId(),
            ':nombre' => $this->getNombre(),
            ':apellidos' => $this->getApellidos(),
            ':correo' => $this->getCorreo(),
            ':genero' => $this->getGenero(),
            ':fecha_nacimiento' => $this->getFechaNacimiento(),
            ':facebook' => $this->getFacebook(),
            ':twitter' => $this->getTwitter(),
            ':google_plus' => $this->getGooglePlus(),
            ':avatar' => $this->getAvatar(),
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
                $sql = 'UPDATE bdp_dato_usuario SET dus_deleted_at = now() WHERE dus_id = :id';
                break;
            case false:
                $sql = 'DELETE FROM bdp_dato_usuario WHERE dus_id = :id';
                break;
            default:
                throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
        }
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return true;
    }

    public function nextId() {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT IFNULL(MAX(dus_id),0)+1 AS id FROM bdp_dato_usuario ORDER BY id DESC LIMIT 1';
        $answer = $conn->prepare($sql);
        $answer->execute();
        $answer = $answer->fetchAll(PDO::FETCH_OBJ);
        return $answer[0]->id;
    }

}
