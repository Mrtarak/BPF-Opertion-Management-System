<?php

namespace App\Controllers;

use App\Models\ProgramThemeModel;
use CodeIgniter\Controller;

class ProgramThemeController extends BaseController
{
    public function index()
    {
        $model = new ProgramThemeModel();
        $data['themes'] = $model->findAll();
        return view('ManageProgramtheme/program_theme', $data);
    }

    public function add()
    {
        return view('forms/add_program_theme');
    }

    public function store()
    {
        $model = new ProgramThemeModel();
        $data = [
            'Program_Theme_Id'        => uniqid('theme_'),
            'Program_Theme_Name'      => $this->request->getPost('Program_Theme_Name'),
            'Theme_Description'       => $this->request->getPost('Theme_Description'),
            'Theme_Suggested_By'      => $this->request->getPost('Theme_Suggested_By'),
            'Theme_Added_On'          => date('Y-m-d'),
            'Rec_Added_By'            => session()->get('username') ?? 'admin',
            'Rec_Added_On'            => date('Y-m-d'),
            'Rec_Updated_By'          => null,
            'Rec_Last_Updated_On'     => null,
        ];
        $model->insert($data);
        return redirect()->to('/program_theme')->with('success', 'Theme added successfully');
    }

    public function view($id)
    {
        $model = new ProgramThemeModel();
        $data['theme'] = $model->find($id);
        return view('forms/view_program_theme', $data);
    }

    public function edit($id)
    {
        $model = new ProgramThemeModel();
        $data['theme'] = $model->find($id);
        return view('forms/edit_program_theme', $data);
    }

    public function update($id)
    {
        $model = new ProgramThemeModel();
        $data = [
            'Program_Theme_Name'      => $this->request->getPost('Program_Theme_Name'),
            'Theme_Description'       => $this->request->getPost('Theme_Description'),
            'Theme_Suggested_By'      => $this->request->getPost('Theme_Suggested_By'),
            'Rec_Updated_By'          => session()->get('username') ?? 'admin',
            'Rec_Last_Updated_On'     => date('Y-m-d'),
        ];
        $model->update($id, $data);
        return redirect()->to('/program_theme')->with('success', 'Theme updated successfully');
    }

    public function delete($id)
    {
        $model = new ProgramThemeModel();
        $model->delete($id);
        return redirect()->to('/program_theme')->with('success', 'Theme deleted successfully');
    }
}
