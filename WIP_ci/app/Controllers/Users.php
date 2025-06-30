<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\RoleModel;
use App\Models\ProgramModel;

class Users extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data['users'] = $this->userModel->findAll();
        return view('ManageUsers/users', $data);
    }

    public function add()
    {
        $roleModel = new RoleModel();
        $programModel = new ProgramModel();

        $data['roles'] = $roleModel->findAll();
        $data['programs'] = $programModel->findAll();
        
        return view('ManageUsers/add_user', $data);
    }

public function store()
{
    $userModel = new UserModel();

    $data = [
        'User_Id' => 'USER_' . uniqid(), 
        'User_FirstName'      => $this->request->getPost('User_FirstName'),
        'User_LastName'       => $this->request->getPost('User_LastName'),
        'User_Gender'         => $this->request->getPost('User_Gender'),
        'User_DOB'            => $this->request->getPost('User_DOB'),
        'User_FatherName'     => $this->request->getPost('User_FatherName'),
        'User_MotherName'     => $this->request->getPost('User_MotherName'),
        'User_Aadhar_No'      => $this->request->getPost('User_Aadhar_No'),
        'User_Phone_No'       => $this->request->getPost('User_Phone_No'),
        'User_Village_City'   => $this->request->getPost('User_Village_City'),
        'User_District'       => $this->request->getPost('User_District'),
        'User_State'          => $this->request->getPost('User_State'),
        'User_Nationality'    => $this->request->getPost('User_Nationality'),
        'User_Joining_Date'   => $this->request->getPost('User_Joining_Date'),
        'User_Address'        => $this->request->getPost('User_Address'),
        'User_Status'         => $this->request->getPost('User_Status'),
        'Role_Id'             => $this->request->getPost('Role_Id'),
        'Program_Id'          => $this->request->getPost('Program_Id'),
        'Record_Added_By' => $this->request->getPost('Record_Added_By'),
        'Rec_Added_On'        => date('Y-m-d'),
        'Rec_Updated_By' => $this->request->getPost('Rec_Updated_By'),
    ];

    $userModel->insert($data);
    return redirect()->to(site_url('users'))->with('success', 'User added successfully.');
}

public function view($id)
{
    $model = new \App\Models\UserModel();
    $data['user'] = $model->find($id);

    if (!$data['user']) {
        return redirect()->to('users')->with('error', 'User not found.');
    }

    return view('ManageUsers/view_user', $data);
}

public function edit($id)
{
    $model = new \App\Models\UserModel();
    $data['user'] = $model->find($id);

    if (!$data['user']) {
        return redirect()->to('users')->with('error', 'User not found.');
    }

    return view('ManageUsers/edit_user', $data);
}

public function update($id)
{
    $model = new \App\Models\UserModel();

    $data = $this->request->getPost(); 

    $model->update($id, $data);

    return redirect()->to('users')->with('success', 'User updated successfully');
}

    public function delete($id)
    {
        $this->userModel->delete($id);
        return redirect()->to('users')->with('success', 'User deleted successfully.');
    }
}
