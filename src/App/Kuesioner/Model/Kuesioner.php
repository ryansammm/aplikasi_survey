<?php

namespace App\Kuesioner\Model;

use Core\GlobalFunc;
use PDOException;

class Kuesioner extends GlobalFunc
{
    private $table = 'jawaban';
    private $primaryKey = 'idJawaban';
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
        $idJawaban = uniqid('id');
        $idSurvey = $datas['idSurvey'];
        $idPertanyaan = $datas['idPertanyaan'];
        $jawaban = $datas['jawaban'];
        $jenisJawaban = NUll;
        $createdAt = date('Y-m-d H:i:s');
        $updatedAt = date('Y-m-d H:i:s');

        $sql = "INSERT INTO " . $this->table . " VALUES ('$idJawaban','$idSurvey' ,'$idPertanyaan', '$jawaban', '$jenisJawaban','$createdAt', '$updatedAt')";
        // dd($sql);

        try {
            $data = $this->conn->prepare($sql);
            $data->execute();

            return $idJawaban;
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }
    public function update($nim, $datas)
    {

        $namaMhs = $datas['namaMhs'];
        $tempatLahir = $datas['tempatLahir'];
        $tglLahir = $datas['tglLahir'];
        $programStudi = $datas['programStudi'];
        $asalSekolah = $datas['asalSekolah'];
        $alamatSekolah = $datas['alamatSekolah'];
        $kelas = $datas['kelas'];
        $jalurMasuk = $datas['jalurMasuk'];
        $tahunAjaran = $datas['tahunAjaran'];
        $tahunLulus = $datas['tahunLulus'];
        $updatedAt = date('Y-m-d H:i:s');

        $sql = "UPDATE " . $this->table . " SET namaMhs = '$namaMhs', tempatLahir = '$tempatLahir', tglLahir = '$tglLahir', programStudi = '$programStudi', asalSekolah = '$asalSekolah', alamatSekolah = '$alamatSekolah', kelas = '$kelas', jalurMasuk = '$jalurMasuk', tahunAjaran = '$tahunAjaran',tahunLulus = '$tahunLulus', updatedAt = '$updatedAt' WHERE " . $this->primaryKey . " = '$nim'";
        // dd($sql);

        try {
            $data = $this->conn->prepare($sql);
            $data->execute();

            return $nim;
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

    public function deleteA($where = "")
    {
        $sql = "DELETE FROM " . $this->table . " " . $where;

        try {
            $query = $this->conn->prepare($sql);
            $query->execute();
            return $query;
        } catch (PDOException $e) {
            dump($e);
            die();
        }
    }

    public function countRows($where = "")
    {
        $sql = "SELECT COUNT(" . $this->primaryKey . ") as count FROM " . $this->table . " LEFT JOIN hasil_survey ON hasil_survey.idSurvey = jawaban.idSurvey LEFT JOIN mahasiswa ON mahasiswa.nim = hasil_survey.nim  " . $where;
        // dd($sql);

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
}
