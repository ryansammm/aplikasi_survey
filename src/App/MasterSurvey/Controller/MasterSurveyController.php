<?php

namespace App\MasterSurvey\Controller;

use App\MasterSurvey\Model\MasterSurvey;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;

class MasterSurveyController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new MasterSurvey();
        parent::beginSession();
    }

    public function index(Request $request)
    {
        $datas = $this->model->selectAll();

        foreach ($datas as $key => $value) {
            if ($value['jenisPertanyaan'] == '1') {
                $datas[$key]['jurusan'] = 'Deskripsi';
            } else if ($value['jenisPertanyaan'] == '2') {
                $datas[$key]['jurusan'] = 'Pilihan Ganda';
            } else if ($value['jenisPertanyaan'] == '3') {
                $datas[$key]['jurusan'] = 'Kotak Centangi';
            } else if ($value['jenisPertanyaan'] == '4') {
                $datas[$key]['jurusan'] = 'Dropdown';
            } else if ($value['jenisPertanyaan'] == '5') {
                $datas[$key]['jurusan'] = 'Tanggal';
            }
        }

        // dd($datas);

        return $this->render_template('admin/master-survey/index', ['datas' => $datas]);
    }
    public function create(Request $request)
    {

        return $this->render_template('admin/master-survey/create', []);
    }
    public function store(Request $request)
    {
    }
    public function detail(Request $request)
    {
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
}
