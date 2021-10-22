<?php

namespace App\Dashboard\Controller;

use App\Chronology\Model\Chronology;
use App\Dashboard\Model\Dashboard;
use App\GroupKontak\Model\GroupKontak;
use App\HargaItem\Model\HargaItem;
use App\InternetUserAlamat\Model\InternetUserAlamat;
use App\Kontak\Model\Kontak;
use App\Kuesioner\Model\Kuesioner;
use App\LayananInternet\Model\LayananInternet;
use App\LayananInternetDetail\Model\LayananInternetDetail;
use App\Media\Model\Media;
use App\Minat\Model\Minat;
use App\MinatLayanan\Model\MinatLayanan;
use App\Provinsi\Model\Provinsi;
use App\Reseller\Model\Reseller;
use App\Sales\Model\Sales;
use App\SalesPerorangan\Model\SalesPerorangan;
use App\UserRequestSurvey\Model\UserRequestSurvey;
use App\Users\Model\Users;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class DashboardController extends GlobalFunc
{
    public $model;
    public $username;

    public function __construct()
    {
        $this->model = new Dashboard();
        parent::beginSession();
    }

    public function index(Request $request)
    {

        if ($this->session->get('username') == null) {
            return new RedirectResponse("/admin");
        }




        // dd($id);




        return $this->render_template('admin/dashboard/index', []);
    }


    public function chart(Request $request)
    {
        $bulan = $request->query->get('bulan') == "" ? date('m') : $request->query->get('bulan');

        if ($bulan == '1') {
            $nama_bulan = 'Januari';
        } else if ($bulan == '2') {
            $nama_bulan = 'Februari';
        } else if ($bulan == '3') {
            $nama_bulan = 'Maret';
        } else if ($bulan == '4') {
            $nama_bulan = 'April';
        } else if ($bulan == '5') {
            $nama_bulan = 'Mei';
        } else if ($bulan == '6') {
            $nama_bulan = 'Juni';
        } else if ($bulan == '7') {
            $nama_bulan = 'Juli';
        } else if ($bulan == '8') {
            $nama_bulan = 'Agustus';
        } else if ($bulan == '9') {
            $nama_bulan = 'September';
        } else if ($bulan == '10') {
            $nama_bulan = 'Oktober';
        } else if ($bulan == '11') {
            $nama_bulan = 'November';
        } else {
            $nama_bulan = 'Desember';
        }

        $kuesioner = new Kuesioner();

        // SEBARAN LULUSAN
        $data_kuesioner_bekerja = $kuesioner->countRows("WHERE month(jawaban.createdAt) = '$bulan' AND year(jawaban.createdAt) = 2021 AND idPertanyaan = 'b1' AND jawaban = 'Ya'");
        $data_kuesioner_wirausaha = $kuesioner->countRows("WHERE month(jawaban.createdAt) = '$bulan' AND year(jawaban.createdAt) = 2021 AND idPertanyaan = 'b36' AND jawaban = 'Ya' ");
        $data_kuesioner_pendidikan = $kuesioner->countRows("WHERE month(jawaban.createdAt) = '$bulan' AND year(jawaban.createdAt) = 2021 AND idPertanyaan = 'b44' AND jawaban = 'Ya' ");
        $data_kuesioner_lainnya = $kuesioner->countRows("WHERE month(jawaban.createdAt) = '$bulan' AND year(jawaban.createdAt) = 2021 AND idPertanyaan = 'b49' AND jawaban = 'Saat ini saya TIDAK bekerja/berwirausaha/ melanjutkan pendidikan' ");
        // dd($data_kuesioner_bekerja);

        // MASA TUNGGU
        $data_kuesioner_b29a = $kuesioner->countRows("WHERE month(jawaban.createdAt) = '$bulan' AND year(jawaban.createdAt) = 2021 AND idPertanyaan = 'b29' AND jawaban = 'Sebelum lulus kuliah' ");
        $data_kuesioner_b29b = $kuesioner->countRows("WHERE month(jawaban.createdAt) = '$bulan' AND year(jawaban.createdAt) = 2021 AND idPertanyaan = 'b29' AND jawaban = '0-3 bulan setelah lulus kuliah' ");
        $data_kuesioner_b29c = $kuesioner->countRows("WHERE month(jawaban.createdAt) = '$bulan' AND year(jawaban.createdAt) = 2021 AND idPertanyaan = 'b29' AND jawaban = '4-6 bulan setelah lulus kuliah' ");
        $data_kuesioner_b29d = $kuesioner->countRows("WHERE month(jawaban.createdAt) = '$bulan' AND year(jawaban.createdAt) = 2021 AND idPertanyaan = 'b29' AND jawaban = '>6 bulan setelah lulus kuliah' ");

        // SESUAI
        $data_kuesioner_b13a = $kuesioner->countRows("WHERE month(jawaban.createdAt) = '$bulan' AND year(jawaban.createdAt) = 2021 AND idPertanyaan = 'b13' AND jawaban = 'Ya, sesuai' ");
        $data_kuesioner_b13b = $kuesioner->countRows("WHERE month(jawaban.createdAt) = '$bulan' AND year(jawaban.createdAt) = 2021 AND idPertanyaan = 'b13' AND jawaban = 'Tidak, tingkat pendidikan saya LEBIH TINGGI dari tingkat pendidikan yg dibutuhkan oleh pekerjaan ini' ");
        $data_kuesioner_b13c = $kuesioner->countRows("WHERE month(jawaban.createdAt) = '$bulan' AND year(jawaban.createdAt) = 2021 AND idPertanyaan = 'b13' AND jawaban = 'Tidak, tingkat pendidikan saya LEBIH RENDAH dari tingkat pendidikan yg dibutuhkan oleh pekerjaan ini' ");
        $data_kuesioner_b13d = $kuesioner->countRows("WHERE month(jawaban.createdAt) = '$bulan' AND year(jawaban.createdAt) = 2021 AND idPertanyaan = 'b13' AND jawaban = 'Tidak, pekerjaan ini tidak membutuhkan pendidikan TINGGI' ");


        // UKURAN TEMPAT 
        $data_kuesioner_b3a = $kuesioner->countRows("WHERE month(jawaban.createdAt) = '$bulan' AND year(jawaban.createdAt) = 2021 AND idPertanyaan = 'b3' AND jawaban = 'Instansi Pemerintah' ");
        $data_kuesioner_b3b = $kuesioner->countRows("WHERE month(jawaban.createdAt) = '$bulan' AND year(jawaban.createdAt) = 2021 AND idPertanyaan = 'b3' AND jawaban = 'Badan Usaha Milik Negara/ Daerah' ");
        $data_kuesioner_b3c = $kuesioner->countRows("WHERE month(jawaban.createdAt) = '$bulan' AND year(jawaban.createdAt) = 2021 AND idPertanyaan = 'b3' AND jawaban = 'Perusahaan swasta multi nasional' ");
        $data_kuesioner_b3d = $kuesioner->countRows("WHERE month(jawaban.createdAt) = '$bulan' AND year(jawaban.createdAt) = 2021 AND idPertanyaan = 'b3' AND jawaban = 'Perusahaan swasta dalam negeri' ");
        $data_kuesioner_b3e = $kuesioner->countRows("WHERE month(jawaban.createdAt) = '$bulan' AND year(jawaban.createdAt) = 2021 AND idPertanyaan = 'b3' AND jawaban = 'Perusahaan perseorangan' ");
        $data_kuesioner_b3f = $kuesioner->countRows("WHERE month(jawaban.createdAt) = '$bulan' AND year(jawaban.createdAt) = 2021 AND idPertanyaan = 'b3' AND jawaban = 'Koperasi/ Yayasan' ");
        $data_kuesioner_b3g = $kuesioner->countRows("WHERE month(jawaban.createdAt) = '$bulan' AND year(jawaban.createdAt) = 2021 AND idPertanyaan = 'b3' AND jawaban = 'Lainnya' ");


        //PENGHASILAN PERTAMA
        $data_kuesioner_b28a = $kuesioner->countRows("WHERE month(jawaban.createdAt) = '$bulan' AND year(jawaban.createdAt) = 2021 AND idPertanyaan = 'b28' AND jawaban = '< 3jt' ");
        $data_kuesioner_b28b = $kuesioner->countRows("WHERE month(jawaban.createdAt) = '$bulan' AND year(jawaban.createdAt) = 2021 AND idPertanyaan = 'b28' AND jawaban = '3 - 5jt' ");
        $data_kuesioner_b28c = $kuesioner->countRows("WHERE month(jawaban.createdAt) = '$bulan' AND year(jawaban.createdAt) = 2021 AND idPertanyaan = 'b28' AND jawaban = '5 - 10jt' ");
        $data_kuesioner_b28d = $kuesioner->countRows("WHERE month(jawaban.createdAt) = '$bulan' AND year(jawaban.createdAt) = 2021 AND idPertanyaan = 'b28' AND jawaban = '> 10jt' ");
        $data_kuesioner_b28e = $kuesioner->countRows("WHERE month(jawaban.createdAt) = '$bulan' AND year(jawaban.createdAt) = 2021 AND idPertanyaan = 'b28' AND jawaban = 'Lainnya' ");

        return new JsonResponse(['data_kuesioner_bekerja' => $data_kuesioner_bekerja, 'nama_bulan' => $nama_bulan, 'data_kuesioner_wirausaha' => $data_kuesioner_wirausaha, 'data_kuesioner_pendidikan' => $data_kuesioner_pendidikan, 'data_kuesioner_lainnya' => $data_kuesioner_lainnya, 'data_kuesioner_b29a' => $data_kuesioner_b29a, 'data_kuesioner_b29b' => $data_kuesioner_b29b, 'data_kuesioner_b29c' => $data_kuesioner_b29c, 'data_kuesioner_b29d' => $data_kuesioner_b29d, 'data_kuesioner_b13a' => $data_kuesioner_b13a, 'data_kuesioner_b13b' => $data_kuesioner_b13b, 'data_kuesioner_b13c' => $data_kuesioner_b13c, 'data_kuesioner_b13d' => $data_kuesioner_b13d, 'data_kuesioner_b3a' => $data_kuesioner_b3a, 'data_kuesioner_b3b' => $data_kuesioner_b3b, 'data_kuesioner_b3c' => $data_kuesioner_b3c, 'data_kuesioner_b3d' => $data_kuesioner_b3d, 'data_kuesioner_b3e' => $data_kuesioner_b3e, 'data_kuesioner_b3f' => $data_kuesioner_b3f, 'data_kuesioner_b3g' => $data_kuesioner_b3g, 'data_kuesioner_b28a' => $data_kuesioner_b28a, 'data_kuesioner_b28b' => $data_kuesioner_b28b, 'data_kuesioner_b28c' => $data_kuesioner_b28c, 'data_kuesioner_b28d' => $data_kuesioner_b28d, 'data_kuesioner_b28e' => $data_kuesioner_b28e]);
    }

    public function detail(Request $request)
    {
        if ($this->session->get('username') == null) {
            return new RedirectResponse("/admin");
        }

        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);
        // dd($datas);


        if ($datas['status'] == '1') {
            $datas['statusText'] = 'Minat';
        } else if ($datas['status'] == '2') {
            $datas['statusText'] = 'Request Survey (Soft)';
        } else if ($datas['status'] == '3') {
            $datas['statusText'] = 'Input Hasil Soft Survey (Soft)';
        } else if ($datas['status'] == '4') {
            $datas['statusText'] = 'Konfirmasi Request Survey (Soft)';
        } else if ($datas['status'] == '5') {
            $datas['statusText'] = 'Lanjut Survey Onsite';
        } else if ($datas['status'] == '6') {
            $datas['statusText'] = 'Survey Onsite';
        } else if ($datas['status'] == '7') {
            $datas['statusText'] = 'User';
        } else if ($datas['status'] == '8') {
            $datas['statusText'] = 'Prospek';
        } else if ($datas['status'] == '9') {
            $datas['statusText'] = 'User';
        }
        // dd($datas);


        return $this->render_template('admin/master/minat/detail', ['datas' => $datas]);
    }

    public function create(Request $request)
    {
        if ($this->session->get('username') == null) {
            return new RedirectResponse("/admin");
        }




        return $this->render_template('admin/master/minat/create', []);
    }



    public function store(Request $request)
    {
        if ($this->session->get('username') == null) {
            return new RedirectResponse("/admin");
        }

        $datas = $request->request->all();


        // $layanan = new LayananInternet();
        // $data_layanan = $layanan->selectOne("WHERE idLayananinternet  =  '" . $datas['idLayanan'] . "'");
        // dd($datas, $data_layanan['namaLayanan']);



        return new RedirectResponse('/minat');
    }

    public function edit(Request $request)
    {

        if ($this->session->get('username') == null) {
            return new RedirectResponse("/admin");
        }

        $id = $request->attributes->get('id');
        $detail = $this->model->selectOne($id);
        // dd($detail);


        return $this->render_template('admin/master/minat/edit', []);
    }

    public function update(Request $request)
    {
        if ($this->session->get('username') == null) {
            return new RedirectResponse("/admin");
        }

        $datas = $request->request->all();
        // dd($datas);



        return new RedirectResponse('/minat');
    }

    public function delete(Request $request)
    {

        if ($this->session->get('username') == null) {
            return new RedirectResponse("/admin");
        }

        $id = $request->attributes->get('id');
        // dd($id);


        return new RedirectResponse('/minat');
    }

    public function get_all(Request $request)
    {
        if ($this->session->get('username') == null) {
            return new RedirectResponse("/admin");
        }

        $datas = $this->model->selectAll();

        return new JsonResponse([
            'datas' => $datas
        ]);
    }

    public function get(Request $request)
    {
        if ($this->session->get('username') == null) {
            return new RedirectResponse("/admin");
        }

        $id = $request->attributes->get('id');
        $data = $this->model->selectOne($id);

        return new JsonResponse([
            'data' => $data
        ]);
    }

    public function cancel(Request $request)
    {

        if ($this->session->get('username') == null) {
            return new RedirectResponse("/admin");
        }

        $id = $request->attributes->get('id');
        $detail = $this->model->selectOne($id);
        $datas = $request->request->all();

        $status = '10';
        $keterangan = $datas['keterangan'];
        $minat_status = $this->model->cancel($id, $status, $keterangan);




        return new RedirectResponse('/registrasi-user-minat');
    }
}
