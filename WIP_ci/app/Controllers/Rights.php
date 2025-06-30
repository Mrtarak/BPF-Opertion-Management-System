<?php

namespace App\Controllers;
use App\Models\RightsModel;
use App\Models\RoleModel;
use CodeIgniter\Controller;

class Rights extends Controller {
    public function manage() {
        $rightsModel = new \App\Models\RightsModel();
    $data['rights'] = $rightsModel->findAll();

        return view('ManageRights/rights', $data);
    }

    public function add() {
        $rightsModel = new \App\Models\RightsModel();
        $data['rights'] = $rightsModel->findAll();
        return view('ManageRights/add_rights', $data);
    }

    public function save()
    {
        helper(['form', 'url']);

        $rightsModel = new RightsModel();

        $data = [
            'Right_Id'        => $this->request->getPost('Right_Id'),
            'Right_Title'     => $this->request->getPost('Right_Title'),
            'Right_Summary'   => $this->request->getPost('Right_Summary'),
            'Program_Info'    => $this->request->getPost('Program_Info'),
            'Event_Info'      => $this->request->getPost('Event_Info'),
            'Center_Info'     => $this->request->getPost('Center_Info'),
            'Asset_Info'      => $this->request->getPost('Asset_Info'),
            'User_Info'       => $this->request->getPost('User_Info'),
            'Fees_Info'       => $this->request->getPost('Fees_Info'),
            'Salary_Info'     => $this->request->getPost('Salary_Info'),
            'Expenses_Info'   => $this->request->getPost('Expenses_Info'),
            'Can_Edit'        => $this->request->getPost('Can_Edit'),
            'Can_Delete'      => $this->request->getPost('Can_Delete'),
            'Record_Added_By' => $this->request->getPost('Record_Added_By'),
            'Rec_Added_On'    => $this->request->getPost('Rec_Added_On'),
            'Rec_Updated_By'  => $this->request->getPost('Rec_Updated_By'),
            'Rec_Last_Updated_On' => $this->request->getPost('Rec_Last_Updated_On'),
        ];

        if ($rightsModel->insert($data)) {
            return redirect()->to(site_url('rights/manage'))->with('success', 'Rights saved successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to save rights.');
        }
    }

    public function update() {
        $rightsModel = new RightsModel();
        $rightId = $this->request->getPost('Right_Id');
        $data = $this->request->getPost();

        unset($data['Right_Id']);  

        $rightsModel->update($rightId, $data);
        return redirect()->to(site_url('rights/manage?role_id=' . $this->request->getPost('Role_Id')));
    }
}
