<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CenterModel;

class Center extends BaseController
{
    protected $centerModel;

    public function __construct()
    {
        $this->centerModel = new CenterModel();
    }

    public function index()
    {
    $centerName = $this->request->getGet('center_filter');

    if ($centerName) {
        $data['centers'] = $this->centerModel
            ->like('Center_Name', $centerName)
            ->findAll();
    } else {
        $data['centers'] = $this->centerModel->findAll();
    }

    return view('ManageCenter/center', $data);    
    }

    public function add()
    {
        return view('ManageCenter/add_Center');
    }

    public function store()
    {
        $data = [
            'Center_Id' => $this->request->getPost('Center_Id'),
            'Center_Name' => $this->request->getPost('Center_Name'),
            'Center_Head_Id' => $this->request->getPost('Center_Head_Id'),
            'Center_Coordinator' => $this->request->getPost('Center_Coordinator'),
            'Center_Status' => $this->request->getPost('Center_Status'),
            'Center_Description' => $this->request->getPost('Center_Description'),
            'Center_Inaugurated_By' => $this->request->getPost('Center_Inaugurated_By'),
            'Center_Head_Contact' => $this->request->getPost('Center_Head_Contact'),
            'Center_Opening_Date' => $this->request->getPost('Center_Opening_Date'),
            'Center_Address' => $this->request->getPost('Center_Address'),
            'Center_City' => $this->request->getPost('Center_City'),
            'Center_State'=> $this->request->getPost('Center_State'),
            'Center_Capacity' => $this->request->getPost('Center_Capacity'),
            'Rec_Added_By' => $this->request->getPost('Rec_Added_By'),
            'Rec_Added_On' => $this->request->getPost('Rec_Added_On') ?: date('Y-m-d'),
            'Rec_Updated_By' => $this->request->getPost('Rec_Updated_By'),
            'Rec_Last_Updated_On'=> $this->request->getPost('Rec_Updated_On') ?: date('Y-m-d'),
        ];

        $this->centerModel->save($data);
        return redirect()->to('/center')->with('success', 'Center added successfully');
    }

    public function edit($id)
    {
        $data['center'] = $this->centerModel->find($id);
        if (!$data['center']) {
            return redirect()->to('/center')->with('error', 'Center not found');
        }
        return view('ManageCenter/edit_center', $data);
    }

    public function update($id)
{
    $data = $this->request->getPost();
    $data['Rec_Last_Updated_On'] = date('Y-m-d');

    $this->centerModel->update($id, $data);
    return redirect()->to('/center')->with('success', 'Center updated successfully');
}

    public function delete($id)
    {
        if (!$this->centerModel->find($id)) {
            return redirect()->to('/center')->with('error', 'Center not found');
        }
        $this->centerModel->delete($id);
        return redirect()->to('/center')->with('success', 'Center deleted successfully');
    }
}