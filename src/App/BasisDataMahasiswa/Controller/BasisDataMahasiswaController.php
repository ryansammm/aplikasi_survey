<?php

namespace App\BasisDataMahasiswa\Controller;

use App\BasisDataMahasiswa\Model\BasisDataMahasiswa;
use App\Kuesioner\Model\Kuesioner;
use App\ProgramStudi\Model\ProgramStudi;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;

class BasisDataMahasiswaController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new BasisDataMahasiswa();
        parent::beginSession();
    }


    public function index(Request $request)
    {
        $datas = $this->model->selectAll();

        foreach ($datas as $key => $value) {
            if ($value['programStudi'] == '1') {
                $datas[$key]['jurusan'] = 'Analisis Kimia';
            } else if ($value['programStudi'] == '2') {
                $datas[$key]['jurusan'] = 'Penjaminan Mutu Industri Pangan';
            } else if ($value['programStudi'] == '3') {
                $datas[$key]['jurusan'] = 'Pengolahan Limbah Industri';
            }
        }

        // dd($datas);

        return $this->render_template('admin/data-mahasiswa/index', ['datas' => $datas]);
    }


    public function create(Request $request)
    {

        return $this->render_template('admin/data-mahasiswa/create', []);
    }


    public function store(Request $request)
    {
        $datas = $request->request->all();
        // dd($datas);

        $data_mhs_create = $this->model->create($datas);

        return new RedirectResponse('/data-mahasiswa');
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
