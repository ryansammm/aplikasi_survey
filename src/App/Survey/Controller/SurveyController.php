<?php

namespace App\Survey\Controller;

use App\BasisDataMahasiswa\Model\BasisDataMahasiswa;
use App\MasterSurvey\Model\MasterSurvey;
use App\Survey\Model\Survey;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class SurveyController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new Survey();
        parent::beginSession();
    }

    public function index(Request $request)
    {
        $datas = $this->model->selectAll();


        // dd($datas);

        return $this->render_template('mhs/survey/index', ['datas' => $datas]);
    }
    public function create(Request $request)
    {

        return $this->render_template('mhs/survey/create', []);
    }

    public function nim(Request $request)
    {
        $datas = $request->request->all();
        // dd($datas);

        $mhs = new BasisDataMahasiswa();
        $data_mhs = $mhs->selectOneNim("WHERE nim = '" . $datas['nim'] . "'");
        // dd($data_mhs);

        if ($data_mhs == NULL) {
            return new RedirectResponse('/survey');
        }

        return new RedirectResponse('/kuesioner/' . $datas['nim']);
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
