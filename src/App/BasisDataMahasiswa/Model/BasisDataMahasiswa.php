<<<<<<< HEAD
<?php

namespace App\BasisDataMahasiswa\Model;

use Core\GlobalFunc;
use PDOException;

class BasisDataMahasiswa extends GlobalFunc
{
    private $table = 'mahasiswa';
    private $primaryKey = 'nim';
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
        $nim = $datas['nim'];
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
        $createdAt = date('Y-m-d H:i:s');
        $updatedAt = date('Y-m-d H:i:s');

        $sql = "INSERT INTO " . $this->table . " VALUES ('$nim', '$namaMhs', '$tempatLahir', '$tglLahir', '$programStudi','$asalSekolah','$alamatSekolah','$kelas','$jalurMasuk','$tahunAjaran', '$tahunLulus','$createdAt', '$updatedAt')";
        // dd($sql);

        try {
            $data = $this->conn->prepare($sql);
            $data->execute();

            return $nim;
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
}
=======
<?php

namespace App\BasisDataMahasiswa\Model;

use Core\GlobalFunc;
use PDOException;

class BasisDataMahasiswa extends GlobalFunc
{
    private $table = ' ';
    private $primaryKey = ' ';
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
        $idUser = uniqid('idUser');
        $idRole = $datas['idRole'];
        $nikUser = $datas['nikUser'];
        $namaUser = $datas['namaUser'];
        $chatId = NULL;
        $createdAt = date('Y-m-d H:i:s');
        $updatedAt = date('Y-m-d H:i:s');

        $sql = "INSERT INTO " . $this->table . " VALUES ('$idUser', '$idRole', '$nikUser', '$namaUser', '$chatId', '$createdAt', '$updatedAt')";

        try {
            $data = $this->conn->prepare($sql);
            $data->execute();

            return $idUser;
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
>>>>>>> bd1c42a1fc22f9eb56c0f320bf47e31937d87bba
