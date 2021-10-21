<?php

namespace App\Import\Controller;

use App\BasisDataMahasiswa\Controller\BasisDataMahasiswaController;
use App\BasisDataMahasiswa\Model\BasisDataMahasiswa;
use App\GroupKontak\Model\GroupKontak;
use App\GroupLegalitas\Model\GroupLegalitas;
use App\GroupPIC\Model\GroupPIC;
use App\InternetUserAlamat\Model\InternetUserAlamat;
use App\InternetUserLayanan\Model\InternetUserLayanan;
use App\InternetUserVendor\Model\InternetUserVendor;
use App\Kabupaten\Model\Kabupaten;
use App\Kecamatan\Model\Kecamatan;
use App\Kelurahan\Model\Kelurahan;
use App\Kontak\Model\Kontak;
use App\LayananInternet\Model\LayananInternet;
use App\LayananInternetDetail\Model\LayananInternetDetail;
use App\Legalitas\Model\Legalitas;
use App\Media\Model\Media;
use App\Pertanyaan\Model\Pertanyaan;
use App\PIC\Model\PIC;
use App\Provinsi\Model\Provinsi;
use App\RegistrasiUser\Model\InternetUserRegistrasi;
use App\Sales\Model\Sales;
use App\Users\Model\Users;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\IReadFilter;

class MyReadFilter implements IReadFilter
{
    public function readCell($column, $row, $worksheetName = '')
    {
        if ($row >= 5 && $row <= 5) {
            if (in_array($column, range('A', 'AF'))) {
                return true;
            }
        }
        return false;
    }
}

class ImportController extends GlobalFunc
{
    public function __construct()
    {
        parent::beginSession();
    }

    public function index(Request $request)
    {
        return $this->render_template('import');
    }

    public function deleteA(Request $request)
    {
        $data_mhs = new BasisDataMahasiswa();
        $data_mhs_delete = $data_mhs->deleteA("WHERE nim = ''");
        return new RedirectResponse('/data-mahasiswa');
    }

    public function prosess(Request $request)
    {

        $inputFileType = 'Xlsx';
        $inputFileName = __DIR__ . '/../../../../web/assets/file/Pertanyaan.xlsx';
        $sheetname = 'Sheet1';

        $Reader = new Xlsx();

        /**  Create an Instance of our Read Filter  **/
        // $filterSubset = new MyReadFilter();

        /**  Create a new Reader of the type defined in $inputFileType  **/
        $reader = IOFactory::createReader($inputFileType);
        $reader->setLoadSheetsOnly($sheetname);
        /**  Tell the Reader that we want to use the Read Filter  **/
        // $reader->setReadFilter($filterSubset);
        /**  Load only the rows and columns that match our filter to Spreadsheet  **/
        $spreadsheet = $reader->load($inputFileName);
        $excelsheet = $spreadsheet->getActiveSheet();
        $data = $excelsheet->toArray();
        // dd($data);

        // $this->
        // dd($data, $data[3][0]);
        $data_mhs = new BasisDataMahasiswa();
        $pertanyaan = new Pertanyaan();

        for ($i = 0; $i < 114; $i++) {
            $pertanyaan_create = $pertanyaan->create([
                'pertanyaan' => $data[$i][0],
            ]);
        }
        // die;
        // dd($data[$i][1]);

        return new RedirectResponse('/data-mahasiswa');
    }



    // for ($i = 4; $i < 5; $i++) {
    //     $dataproduk = $produk->insert([
    //         'namaItem' => $data[$i][3],
    //         'supplierItem' => $sheetname,
    //         'kuantitiItem' => 0,
    //         'hargaItem' => $data[$i][4],
    //         'hargaperpcsItem' => $data[$i][5] != 'NOT' ? $data[$i][5] : '',
    //         'tanggalmasukProduk' => '',
    //         'tanggalexpiryProduk' => ''
    //     ]);

    //     if ($data[$i][6] != 'NOT') {
    //         $arr = [
    //             'satuanHarga' => "Pcs",
    //             'jenisHarga' => '1',
    //             'hargaHarga' => $data[$i][6]
    //         ];
    //         $hargaitem->insert($dataproduk, $arr);
    //     }
    //     if ($data[$i][6] != 'NOT') {
    //         $arr = [
    //             'satuanHarga' => "Kg",
    //             'jenisHarga' => '1',
    //             'hargaHarga' => $data[$i][6]
    //         ];
    //         $hargaitem->insert($dataproduk, $arr);
    //     }
    //     if ($data[$i][7] != 'NOT') {
    //         $arr = [
    //             'satuanHarga' => "Krg",
    //             'jenisHarga' => '1',
    //             'hargaHarga' => $data[$i][7]
    //         ];
    //         $hargaitem->insert($dataproduk, $arr);
    //     }
    //     if ($data[$i][7] != 'NOT') {
    //         $arr = [
    //             'satuanHarga' => "Dus",
    //             'jenisHarga' => '1',
    //             'hargaHarga' => $data[$i][7]
    //         ];
    //         $hargaitem->insert($dataproduk, $arr);
    //     }
    //     if ($data[$i][7] != 'NOT') {
    //         $arr = [
    //             'satuanHarga' => "Set",
    //             'jenisHarga' => '1',
    //             'hargaHarga' => $data[$i][7]
    //         ];
    //         $hargaitem->insert($dataproduk, $arr);
    //     }
    //     if ($data[$i][8] != 'NOT') {
    //         $arr = [
    //             'satuanHarga' => "Pcs",
    //             'jenisHarga' => '2',
    //             'hargaHarga' => $data[$i][8]
    //         ];
    //         $hargaitem->insert($dataproduk, $arr);
    //     }
    //     if ($data[$i][8] != 'NOT') {
    //         $arr = [
    //             'satuanHarga' => "Kg",
    //             'jenisHarga' => '2',
    //             'hargaHarga' => $data[$i][8]
    //         ];
    //         $hargaitem->insert($dataproduk, $arr);
    //     }
    //     if ($data[$i][9] != 'NOT') {
    //         $arr = [
    //             'satuanHarga' => "Krg",
    //             'jenisHarga' => '2',
    //             'hargaHarga' => $data[$i][9]
    //         ];
    //         $hargaitem->insert($dataproduk, $arr);
    //     }
    //     if ($data[$i][9] != 'NOT') {
    //         $arr = [
    //             'satuanHarga' => "Dus",
    //             'jenisHarga' => '2',
    //             'hargaHarga' => $data[$i][9]
    //         ];
    //         $hargaitem->insert($dataproduk, $arr);
    //     }
    //     if ($data[$i][9] != 'NOT') {
    //         $arr = [
    //             'satuanHarga' => "Set",
    //             'jenisHarga' => '2',
    //             'hargaHarga' => $data[$i][9]
    //         ];
    //         $hargaitem->insert($dataproduk, $arr);
    //     }
    // }


}
