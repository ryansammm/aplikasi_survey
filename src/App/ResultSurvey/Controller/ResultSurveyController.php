<<<<<<< HEAD
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
=======
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
>>>>>>> bd1c42a1fc22f9eb56c0f320bf47e31937d87bba
}