<?php
namespace App\Controllers\ManageStudents;

use App\Controllers\BaseController;

class DigitalShakti extends BaseController
{
    public function index()
    {
        // Dummy Students
        $data['students'] = [
            [
                'Student_Id' => 'DM001',
                'First_Name' => 'Ankit',
                'Last_Name' => 'Singh',
                'Current_Education_level' => '10th Pass',
                'Email_Id' => 'ankit@example.com',
                'Phone_No' => '9876543210',
                'Village_City' => 'Pune',
                'State' => 'Maharashtra',
                'Student_Status' => 'Active'
            ],
            [
                'Student_Id' => 'DM002',
                'First_Name' => 'Priya',
                'Last_Name' => 'Joshi',
                'Current_Education_level' => '12th Pass',
                'Email_Id' => 'priya@example.com',
                'Phone_No' => '9123456789',
                'Village_City' => 'Maregaon',
                'State' => 'Delhi',
                'Student_Status' => 'Completed'
            ]
        ];
        return view('ManageStudents/digital_shakti/list', $data);
    }

    public function add()
    {
        return view('ManageStudents/digital_shakti/add');
    }

    public function store()
    {
        return redirect()->to('students/digital_shakti')->with('success', 'Student added successfully');
    }

    public function view($id)
    {
        $data['student'] = [
            'Student_Id' => $id,
                'First_Name' => 'Ankit',
                'Last_Name' => 'Singh',
                'Gender' => 'male',
                'DOB' => '15-07-2002',
                'Phone_No' => '9876543210',
                'Email_Id' => 'ankit@example.com',
                'Address' => '7 Sky layout',
                'Village_City' => 'Pune',
                'State' => 'Maharashtra',
                'Current_Education_level' => '10th Pass',
                'Highest_Education_Completed' => '9th Pass',
                'Student_Caste' => 'OBC',
                'Student_Status' => 'Active',
                'Program_Name' => 'Digital Shakti',
                'Batch_Name' => 'Batch1',
                'Program_Level' => '10th Pass',
        ];
        return view('ManageStudents/digital_shakti/view', $data);
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
        return view('ManageStudents/digital_shakti/edit', $data);
    }

    public function update($id)
    {
        return redirect()->to('students/digital_shakti')->with('success', 'Student updated successfully');
    }

    public function delete($id)
    {
        return redirect()->to('students/digital_shakti')->with('success', 'Student deleted successfully');
    }
}
