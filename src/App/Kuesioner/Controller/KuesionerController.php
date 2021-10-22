<?php

namespace App\Kuesioner\Controller;

use App\BasisDataMahasiswa\Model\BasisDataMahasiswa;
use App\HasilSurvey\Model\HasilSurvey;
use App\Kuesioner\Model\Kuesioner;
use App\ProgramStudi\Model\ProgramStudi;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;

class KuesionerController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new Kuesioner();
        parent::beginSession();
    }


    public function index(Request $request)
    {
        $datas = $this->model->selectAll();
        $id = $request->attributes->get('id');
        // dd($id);

        // foreach ($datas as $key => $value) {
        //     if ($value['programStudi'] == '1') {
        //         $datas[$key]['jurusan'] = 'Analisis Kimia';
        //     } else if ($value['programStudi'] == '2') {
        //         $datas[$key]['jurusan'] = 'Penjaminan Mutu Industri Pangan';
        //     } else if ($value['programStudi'] == '3') {
        //         $datas[$key]['jurusan'] = 'Pengolahan Limbah Industri';
        //     }
        // }

        // dd($datas);

        return $this->render_template('mhs/kuesioner/index', ['datas' => $datas, 'id' => $id]);
    }


    public function create(Request $request)
    {

        return $this->render_template('mhs/kuesioner/create', []);
    }


    public function store(Request $request)
    {
        $datas = $request->request->all();
        $id = $request->attributes->get('id');
        // dd($datas);

        $hasil_survey = new HasilSurvey();

        $hasil_survey_create = $hasil_survey->create([
            'nim' => $id,
        ]);

        foreach ($datas as $key => $value) {
            if ($value != '') {

                $jawaban_create = $this->model->create([
                    'idSurvey' => $hasil_survey_create,
                    'idPertanyaan' => $key,
                    'jawaban' => $value,
                ]);
            }
        }

        return new RedirectResponse('/survey');
    }


    public function detail(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);

        if ($datas['programStudi'] == '1') {
            $datas['studi'] = 'Analisis Kimia';
        } else if ($datas['programStudi'] == '2') {
            $datas['studi'] = 'Penjaminan Mutu Industri Pangan';
        } else if ($datas['programStudi'] == '3') {
            $datas['studi'] = 'Pengolahan Limbah Industri';
        }
        // dd($datas);

        return $this->render_template('admin/data-mahasiswa/detail', ['datas' => $datas]);
    }


    public function edit(Request $request)
    {
        $id = $request->attributes->get('id');
        $detail = $this->model->selectOne($id);
        // dd($detail);

        $program_studi = new ProgramStudi();
        $data_program_studi = $program_studi->selectAll();


        return $this->render_template('admin/data-mahasiswa//edit', ['detail' => $detail, 'data_program_studi' => $data_program_studi]);
    }


    public function update(Request $request)
    {
        $datas = $request->request->all();
        $id = $request->attributes->get('id');

        $update = $this->model->update($id, $datas);


        return new RedirectResponse('/data-mahasiswa');
    }


    public function readOne(Request $request)
    {
    }


    public function delete(Request $request)
    {
        $id = $request->attributes->get('id');
        // dd($id);

        $data_mhs_delete = $this->model->delete($id);


        return new RedirectResponse('/data-mahasiswa');
    }
}
