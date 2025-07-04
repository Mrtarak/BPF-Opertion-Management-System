<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProgramModel;

class Programs extends BaseController
{
    protected $programModel;

    public function __construct()
    {
        $this->programModel = new ProgramModel();
    }

    public function index()
    {
    $programName = $this->request->getGet('program_filter');

    if ($programName) {
        $data['programs'] = $this->programModel
            ->where('LOWER(REPLACE(Program_Name, " ", "_"))', strtolower($programName))
            ->findAll();
    } else {
        $data['programs'] = $this->programModel->findAll();
    }

    return view('programs', $data);    
    }

    public function add()
    {
        return view('add_programs');
    }

    public function store()
    {
        $programId = 'PROG_' . uniqid();
        if (!$this->validate([
            'Program_Name' => 'required',
            'Program_About' => 'required',
            'Program_Start_Date' => 'required',
            'Program_Theme_Id' => 'required',
            'Applicable_For' => 'required',
            'Rec_Added_By' => 'required',
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'Program_Id' => $programId,
            'Program_Name' => $this->request->getPost('Program_Name'),
            'Program_About' => $this->request->getPost('Program_About'),
            'Program_Start_Date' => $this->request->getPost('Program_Start_Date'),
            'Program_End_Date' => $this->request->getPost('Program_End_Date'),
            'Program_Theme_Id' => $this->request->getPost('Program_Theme_Id'),
            'Applicable_For' => $this->request->getPost('Applicable_For'),
            'Program_Status' => $this->request->getPost('Program_Status'),
            'Rec_Added_By'       => $this->request->getPost('Rec_Added_By'),
            'Rec_Added_On'       => $this->request->getPost('Rec_Added_On') ?: date('Y-m-d'),
        'Rec_Updated_By'     => $this->request->getPost('Rec_Updated_By'),
        'Rec_Last_Updated_On'=> $this->request->getPost('Rec_Updated_On') ?: date('Y-m-d'),
        ];

        $this->programModel->save($data);
        return redirect()->to('/programs')->with('success', 'Program added successfully');
    }

    public function edit($id)
    {
        $data['program'] = $this->programModel->find($id);
        if (!$data['program']) {
            return redirect()->to('/programs')->with('error', 'Program not found');
        }
        return view('edit_programs', $data);
    }

    public function update($id)
    {
        if (!$this->programModel->find($id)) {
            return redirect()->to('/programs')->with('error', 'Program not found');
        }

        $data = [
            'Program_Name' => $this->request->getPost('Program_Name'),
            'About' => $this->request->getPost('About'),
            'Start_Date' => $this->request->getPost('Start_Date'),
            'End_Date' => $this->request->getPost('End_Date'),
            'Program_Theme_Id' => $this->request->getPost('Program_Theme_Id'),
            'Applicable_For' => $this->request->getPost('Applicable_For'),
            'Program_Status' => $this->request->getPost('Program_Status'),
        ];

        $this->programModel->update($id, $data);
        return redirect()->to('/programs')->with('success', 'Program updated successfully');
    }

    public function delete($id)
    {
        if (!$this->programModel->find($id)) {
            return redirect()->to('/programs')->with('error', 'Program not found');
        }
        $this->programModel->delete($id);
        return redirect()->to('/programs')->with('success', 'Program deleted successfully');
    }
}