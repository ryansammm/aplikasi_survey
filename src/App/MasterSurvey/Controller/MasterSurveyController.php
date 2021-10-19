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


    }
    public function create(Request $request)
    {


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