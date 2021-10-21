<?php

namespace App\Survey\Controller;

use App\MasterSurvey\Model\MasterSurvey;
use App\Survey\Model\Survey;
use Core\GlobalFunc;
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
