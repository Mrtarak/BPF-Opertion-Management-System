<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\VijetaasModel;

class Vijetaas extends BaseController{
    public function index()
    {
        $data['vijetaas'] = $this->VijetaasModel->findAll();
        return view('vijetaas', $data);
    }

}