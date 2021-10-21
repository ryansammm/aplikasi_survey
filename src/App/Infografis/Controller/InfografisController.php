<?php

namespace App\Infografis\Controller;

use App\Infografis\Model\Infografis;
use App\MasterSurvey\Model\MasterSurvey;
use Core\GlobalFunc;
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


        // dd($datas);

        return $this->render_template('mhs/infografis/index', ['datas' => $datas]);
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


        return $this->render_template('mhs/infografis/detail', []);
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
