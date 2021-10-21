<?php

namespace App\BasisDataMahasiswa\Controller;

use App\BasisDataMahasiswa\Model\BasisDataMahasiswa;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;

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