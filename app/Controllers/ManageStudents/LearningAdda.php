<?php
namespace App\Controllers\ManageStudents;

use App\Controllers\BaseController;

class LearningAdda extends BaseController
{
    public function index()
    {
        // Dummy Students
        $data['students'] = [
            [
                'Student_Id' => 'DM001',
                'First_Name' => 'Ankit',
                'Last_Name' => 'Singh',
                'Current_Education_level' => '7th Pass',
                'Email_Id' => 'ankit@example.com',
                'Phone_No' => '9876543210',
                'Village_City' => 'Nagpur',
                'State' => 'Maharashtra',
                'Student_Status' => 'Active'
            ],
            [
                'Student_Id' => 'DM002',
                'First_Name' => 'Priya',
                'Last_Name' => 'Joshi',
                'Current_Education_level' => '5th Pass',
                'Email_Id' => 'priya@example.com',
                'Phone_No' => '9123456789',
                'Village_City' => 'Satara',
                'State' => 'Gujrat',
                'Student_Status' => 'Completed'
            ]
        ];
        return view('ManageStudents/learning_adda/list', $data);
    }

    public function add()
    {
        return view('ManageStudents/learning_adda/add');
    }

    public function store()
    {
        return redirect()->to('students/learning_adda')->with('success', 'Student added successfully');
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
        return view('ManageStudents/learning_adda/view', $data);
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
        return view('ManageStudents/learning_adda/edit', $data);
    }

    public function update($id)
    {
        return redirect()->to('students/learning_adda')->with('success', 'Student updated successfully');
    }

    public function delete($id)
    {
        return redirect()->to('students/learning_adda')->with('success', 'Student deleted successfully');
    }
}
