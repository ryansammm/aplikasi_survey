<?php

namespace App\Infografis\Controller;

use App\BasisDataMahasiswa\Model\BasisDataMahasiswa;
use App\HasilSurvey\Model\HasilSurvey;
use App\Infografis\Model\Infografis;
use App\Kuesioner\Model\Kuesioner;
use App\MasterSurvey\Model\MasterSurvey;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class InfografisController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new Infografis();
        parent::beginSession();
    }


    public function index(Request $request)
    {
        $datas = $this->model->selectAll();

        $hasil_survey = new HasilSurvey();
        $data_hasil_survey = $hasil_survey->selectAllTahun();
        // dd($data_hasil_survey);


        // dd($datas);

        return $this->render_template('mhs/infografis/index', ['datas' => $datas, 'data_hasil_survey' => $data_hasil_survey]);
    }


    public function create(Request $request)
    {

        return $this->render_template('mhs/infografis/create', []);
    }


    public function store(Request $request)
    {
    }


    public function detail(Request $request)
    {
        $id = $request->attributes->get('tahun');
        // dd($id);

        $mhs = new BasisDataMahasiswa();
        $mhs_count = $mhs->countRows();
        $mhs_tahun = $mhs->selectAllTahun();
        //dd($mhs_tahun);

        $hasil_survey = new HasilSurvey();
        $hasil_survey_count = $hasil_survey->countRows();


        $presentase = ($hasil_survey_count['count'] / $mhs_count['count']) * 100;





        return $this->render_template('mhs/infografis/detail', ['id' => $id, 'mhs_count' => $mhs_count, 'hasil_survey_count' => $hasil_survey_count, 'presentase' => $presentase, 'mhs_tahun' => $mhs_tahun]);
    }


    public function edit(Request $request)
    {
    }


    public function update(Request $request)
    {
    }


    public function readOne(Request $request)
    {
    }


    public function delete(Request $request)
    {
    }

    public function chart(Request $request)
    {

        $kuesioner = new Kuesioner();

        // SEBARAN LULUSAN
        $data_kuesioner_bekerja = $kuesioner->countRows("WHERE tahunAjaran = 2021 AND idPertanyaan = 'b1' AND jawaban = 'Ya'");
        $data_kuesioner_wirausaha = $kuesioner->countRows("WHERE tahunAjaran = 2021 AND idPertanyaan = 'b36' AND jawaban = 'Ya' ");
        $data_kuesioner_pendidikan = $kuesioner->countRows("WHERE tahunAjaran = 2021 AND idPertanyaan = 'b44' AND jawaban = 'Ya' ");
        $data_kuesioner_lainnya = $kuesioner->countRows("WHERE tahunAjaran = 2021 AND idPertanyaan = 'b49' AND jawaban = 'Saat ini saya TIDAK bekerja/berwirausaha/ melanjutkan pendidikan' ");
        // dd($data_kuesioner_bekerja);

        // MASA TUNGGU
        $data_kuesioner_b29a = $kuesioner->countRows("WHERE tahunAjaran = 2021 AND idPertanyaan = 'b29' AND jawaban = 'Sebelum lulus kuliah' ");
        $data_kuesioner_b29b = $kuesioner->countRows("WHERE tahunAjaran = 2021 AND idPertanyaan = 'b29' AND jawaban = '0-3 bulan setelah lulus kuliah' ");
        $data_kuesioner_b29c = $kuesioner->countRows("WHERE tahunAjaran = 2021 AND idPertanyaan = 'b29' AND jawaban = '4-6 bulan setelah lulus kuliah' ");
        $data_kuesioner_b29d = $kuesioner->countRows("WHERE tahunAjaran = 2021 AND idPertanyaan = 'b29' AND jawaban = '>6 bulan setelah lulus kuliah' ");

        // SESUAI
        $data_kuesioner_b13a = $kuesioner->countRows("WHERE tahunAjaran = 2021 AND idPertanyaan = 'b13' AND jawaban = 'Ya, sesuai' ");
        $data_kuesioner_b13b = $kuesioner->countRows("WHERE tahunAjaran = 2021 AND idPertanyaan = 'b13' AND jawaban = 'Tidak, tingkat pendidikan saya LEBIH TINGGI dari tingkat pendidikan yg dibutuhkan oleh pekerjaan ini' ");
        $data_kuesioner_b13c = $kuesioner->countRows("WHERE tahunAjaran = 2021 AND idPertanyaan = 'b13' AND jawaban = 'Tidak, tingkat pendidikan saya LEBIH RENDAH dari tingkat pendidikan yg dibutuhkan oleh pekerjaan ini' ");
        $data_kuesioner_b13d = $kuesioner->countRows("WHERE tahunAjaran = 2021 AND idPertanyaan = 'b13' AND jawaban = 'Tidak, pekerjaan ini tidak membutuhkan pendidikan TINGGI' ");


        // UKURAN TEMPAT 
        $data_kuesioner_b3a = $kuesioner->countRows("WHERE tahunAjaran = 2021 AND idPertanyaan = 'b3' AND jawaban = 'Instansi Pemerintah' ");
        $data_kuesioner_b3b = $kuesioner->countRows("WHERE tahunAjaran = 2021 AND idPertanyaan = 'b3' AND jawaban = 'Badan Usaha Milik Negara/ Daerah' ");
        $data_kuesioner_b3c = $kuesioner->countRows("WHERE tahunAjaran = 2021 AND idPertanyaan = 'b3' AND jawaban = 'Perusahaan swasta multi nasional' ");
        $data_kuesioner_b3d = $kuesioner->countRows("WHERE tahunAjaran = 2021 AND idPertanyaan = 'b3' AND jawaban = 'Perusahaan swasta dalam negeri' ");
        $data_kuesioner_b3e = $kuesioner->countRows("WHERE tahunAjaran = 2021 AND idPertanyaan = 'b3' AND jawaban = 'Perusahaan perseorangan' ");
        $data_kuesioner_b3f = $kuesioner->countRows("WHERE tahunAjaran = 2021 AND idPertanyaan = 'b3' AND jawaban = 'Koperasi/ Yayasan' ");
        $data_kuesioner_b3g = $kuesioner->countRows("WHERE tahunAjaran = 2021 AND idPertanyaan = 'b3' AND jawaban = 'Lainnya' ");


        //PENGHASILAN PERTAMA
        $data_kuesioner_b28a = $kuesioner->countRows("WHERE tahunAjaran = 2021 AND idPertanyaan = 'b28' AND jawaban = '< 3jt' ");
        $data_kuesioner_b28b = $kuesioner->countRows("WHERE tahunAjaran = 2021 AND idPertanyaan = 'b28' AND jawaban = '3 - 5jt' ");
        $data_kuesioner_b28c = $kuesioner->countRows("WHERE tahunAjaran = 2021 AND idPertanyaan = 'b28' AND jawaban = '5 - 10jt' ");
        $data_kuesioner_b28d = $kuesioner->countRows("WHERE tahunAjaran = 2021 AND idPertanyaan = 'b28' AND jawaban = '> 10jt' ");
        $data_kuesioner_b28e = $kuesioner->countRows("WHERE tahunAjaran = 2021 AND idPertanyaan = 'b28' AND jawaban = 'Lainnya' ");

        return new JsonResponse(['data_kuesioner_bekerja' => $data_kuesioner_bekerja, 'data_kuesioner_wirausaha' => $data_kuesioner_wirausaha, 'data_kuesioner_pendidikan' => $data_kuesioner_pendidikan, 'data_kuesioner_lainnya' => $data_kuesioner_lainnya, 'data_kuesioner_b29a' => $data_kuesioner_b29a, 'data_kuesioner_b29b' => $data_kuesioner_b29b, 'data_kuesioner_b29c' => $data_kuesioner_b29c, 'data_kuesioner_b29d' => $data_kuesioner_b29d, 'data_kuesioner_b13a' => $data_kuesioner_b13a, 'data_kuesioner_b13b' => $data_kuesioner_b13b, 'data_kuesioner_b13c' => $data_kuesioner_b13c, 'data_kuesioner_b13d' => $data_kuesioner_b13d, 'data_kuesioner_b3a' => $data_kuesioner_b3a, 'data_kuesioner_b3b' => $data_kuesioner_b3b, 'data_kuesioner_b3c' => $data_kuesioner_b3c, 'data_kuesioner_b3d' => $data_kuesioner_b3d, 'data_kuesioner_b3e' => $data_kuesioner_b3e, 'data_kuesioner_b3f' => $data_kuesioner_b3f, 'data_kuesioner_b3g' => $data_kuesioner_b3g, 'data_kuesioner_b28a' => $data_kuesioner_b28a, 'data_kuesioner_b28b' => $data_kuesioner_b28b, 'data_kuesioner_b28c' => $data_kuesioner_b28c, 'data_kuesioner_b28d' => $data_kuesioner_b28d, 'data_kuesioner_b28e' => $data_kuesioner_b28e]);
    }
}
