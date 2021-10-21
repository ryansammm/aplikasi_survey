<?php

namespace App\ResultSurvey\Controller;

use App\ResultSurvey\Model\ResultSurvey;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;

class ResultSurveyController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new ResultSurvey();
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
