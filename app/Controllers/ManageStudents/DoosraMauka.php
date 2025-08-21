<?php
namespace App\Controllers\ManageStudents;

use App\Controllers\BaseController;

class DoosraMauka extends BaseController
{
    public function index()
    {
        // Dummy Students
        $data['students'] = [
            [
                'Student_Id' => 'DM001',
                'First_Name' => 'Ankita',
                'Last_Name' => 'Singh',
                'Current_Education_level' => '10th Pass',
                'Email_Id' => 'ankita@example.com',
                'Phone_No' => '9876543210',
                'Village_City' => 'Pune',
                'State' => 'Maharashtra',
                'Student_Status' => 'Active'
            ],
            [
                'Student_Id' => 'DM002',
                'First_Name' => 'Priya',
                'Last_Name' => 'Joshi',
                'Current_Education_level' => '10th Pass',
                'Email_Id' => 'priya@example.com',
                'Phone_No' => '9123456789',
                'Village_City' => 'Rampur',
                'State' => 'Delhi',
                'Student_Status' => 'Completed'
            ]
        ];
        return view('ManageStudents/doosra_mauka/list', $data);
    }

    public function add()
    {
        return view('ManageStudents/doosra_mauka/add');
    }

    public function store()
    {
        return redirect()->to('students/doosra_mauka')->with('success', 'Student added successfully');
    }

    public function view($id)
    {
        $data['student'] = [
            'Student_Id' => $id,
            'First_Name' => 'Dummy',
            'Last_Name' => 'Student',
            'Email_Id' => 'dummy@example.com',
            'Phone_No' => '9999999999',
            'State' => 'Test State',
            'Student_Status' => 'Active'
        ];
        return view('ManageStudents/doosra_mauka/view', $data);
    }

    public function edit($id)
    {
        $data['student'] = [
            'Student_Id' => $id,
            'First_Name' => 'Dummy',
            'Last_Name' => 'Edit',
            'Email_Id' => 'edit@example.com',
            'Phone_No' => '8888888888',
            'State' => 'Edit State',
            'Student_Status' => 'Active'
        ];
        return view('ManageStudents/doosra_mauka/edit', $data);
    }

    public function update($id)
    {
        return redirect()->to('students/doosra_mauka')->with('success', 'Student updated successfully');
    }

    public function delete($id)
    {
        return redirect()->to('students/doosra_mauka')->with('success', 'Student deleted successfully');
    }
}
