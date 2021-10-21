<?php

namespace App\Survey\Model;

use Core\GlobalFunc;
use PDOException;


class Survey extends GlobalFunc
{
    private $table = 'pertanyaan';
    private $primaryKey = 'idPertanyaan';
    public $conn;


    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }
    public function selectAll($where = "")
    {
        $sql = "SELECT * FROM " . $this->table . " " . $where;

        try {
            $query = $this->conn->prepare($sql);
            $query->execute();
            $data = $query->fetchAll();

            return $data;
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }
    public function selectOne($id)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE " . $this->primaryKey . " = '$id'";

        try {
            $query = $this->conn->prepare($sql);
            $query->execute();
            $data = $query->fetch();

            return $data;
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }
    public function create($datas)
    {
        $idPertanyaan = uniqid('id');
        $pertanyaan = $datas['pertanyaan'];
        $jenisPertanyaan = NULL;
        $createdAt = date('Y-m-d H:i:s');
        $updatedAt = date('Y-m-d H:i:s');

        $sql = "INSERT INTO " . $this->table . " VALUES ('$idPertanyaan', '$pertanyaan', '$jenisPertanyaan', '$createdAt', '$updatedAt')";

        try {
            $data = $this->conn->prepare($sql);
            $data->execute();

            return $idPertanyaan;
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }
    public function update($id, $datas)
    {
        $nikUser = $datas['nikUser'];
        $namaUser = $datas['namaUser'];
        $chatId = NULL;
        $updatedAt = date('Y-m-d H:i:s');

        $sql = "UPDATE " . $this->table . " SET nikUser = '$nikUser', namaUser = '$namaUser', chatId = '$chatId', updatedAt = '$updatedAt' WHERE " . $this->primaryKey . " = '$id'";

        try {
            $data = $this->conn->prepare($sql);
            $data->execute();

            return $id;
        } catch (PDOexception $e) {
            echo $e;
            die();
        }
    }
    public function delete($id)
    {
        $sql = "DELETE FROM " . $this->table . " WHERE " . $this->primaryKey . " = '$id'";

        try {
            $query = $this->conn->prepare($sql);
            $query->execute();
            return $query;
        } catch (PDOException $e) {
            dump($e);
            die();
        }
    }
}
