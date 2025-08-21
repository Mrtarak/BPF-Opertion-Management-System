<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BatchModel;
use App\Models\ProgramModel;
use App\Models\CenterModel;

class Batch extends BaseController
{
    protected $batchModel;

    public function __construct()
    {
        $this->batchModel = new BatchModel();
    }

    public function index()
    {
        $data['batches'] = $this->batchModel->findAll();
        return view('ManageBatches/batches', $data);
    }

    public function add()
    {
        $programModel = new ProgramModel();
        $centerModel = new CenterModel();
        $data['programs'] = $programModel->findAll();
        $data['centers'] = $centerModel->findAll();
        return view('ManageBatches/add_batch', $data);
    }

    public function store()
    {
        $this->batchModel->insert($this->request->getPost());
        return redirect()->to(site_url('batches'))->with('success', 'Batch added successfully');
    }

    public function edit($id)
    {
        $data['batch'] = $this->batchModel->find($id);
        $programModel = new ProgramModel();
        $centerModel = new CenterModel();
        $data['programs'] = $programModel->findAll();
        $data['centers'] = $centerModel->findAll();
        return view('ManageBatches/edit_batch', $data);
    }

    public function update($id)
    {
        $this->batchModel->update($id, $this->request->getPost());
        return redirect()->to(site_url('batches'))->with('success', 'Batch updated successfully');
    }

public function view($id)
{
    $model = new \App\Models\BatchModel();
    $batch = $model->find($id);
    
    return view('ManageBatches/view_batch', ['batch' => $batch]);
}

    public function delete($id)
    {
        $this->batchModel->delete($id);
        return redirect()->to(site_url('batches'))->with('success', 'Batch deleted successfully');
    }
}
