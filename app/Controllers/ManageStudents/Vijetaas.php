<?php
namespace App\Controllers\ManageStudents;

use App\Controllers\BaseController;
use App\Models\StudentModel;
use App\Models\StudentProgramModel;
use App\Models\StudentMentorModel;
use App\Models\StudentGoalsModel;
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;


class Vijetaas extends BaseController
{
    public function index()
    {
        $studentModel = new StudentModel();
        $mentorModel  = new StudentMentorModel();
        $goalModel    = new StudentGoalsModel();

        // $data['students'] = $studentModel->getVijetaasStudents();

    // Mentor details join with student table
    // $data['mentors'] = $mentorModel->select('student.First_Name, student.Last_Name, student_mentor.*')
    //     ->join('student', 'student.Student_Id = student_mentor.Student_Id')
    //     ->where('student_mentor.Program_Id', 'VIJETAAS') // Program filter
    //     ->findAll();
    
    // Goals
    // $data['goals'] = $goalModel->select('student.First_Name, student.Last_Name, student_goals.*')
    //     ->join('student', 'student.Student_Id = student_goals.Student_Id')
    //     ->join('student_program sp', 'student.Student_Id = sp.Student_Id', 'left')
    //     ->where('sp.Program_Id', 'VIJETAAS')
    //     ->findAll();
        // Students dummy data
        $data['students'] = [
            [
                'Student_Id' => 'STU001',
                'First_Name' => 'Rohit',
                'Last_Name' => 'Sharma',
                'Current_Education_level' => 'B.Sc Computer Science',
                'Email_Id' => 'rohit@example.com',
                'Village_City' => 'Pune',
                'State' => 'Maharashtra',
                'Mentor_Name' => 'Amit Verma',
                'Student_Status' => 'Active'
            ],
            [
                'Student_Id' => 'STU002',
                'First_Name' => 'Sneha',
                'Last_Name' => 'Patil',
                'Current_Education_level' => 'M.Com',
                'Email_Id' => 'sneha@example.com',
                'Village_City' => 'Nagpur',
                'State' => 'Maharashtra',
                'Mentor_Name' => 'Rahul Deshmukh',
                'Student_Status' => 'Completed'
            ]
        ];

        // Mentors dummy data
        $data['mentors'] = [
            [

                'Mentor_Name' => 'Amit Verma',
                'Mentor_Category' => '',
                'Mentor_Type' => 'Primary',
                'Mentor_Status' => 'Active',
                'Mentor_From_Date' => '2024-01-15',
                'Mentor_To_Date' => null,
                'Mentor_For' => 'Technical Skills'
            ],
            [
                'Mentor_Name' => 'Sneha Patil',
               'Mentor_Category' => '',
                'Mentor_Type' => 'Secondary',
                'Mentor_Status' => 'InActive',
                'Mentor_From_Date' => '2023-06-01',
                'Mentor_To_Date' => '2024-03-20',
                'Mentor_For' => 'Soft Skills'
            ]
        ];

        // Goals dummy data
        $data['goals'] = [
            [
                'Goal_Type' => 'Get Job in IT',
                'Goal_Start_On' => '2024-02-01',
                'Goal_Expected_completion_Date' => '2024-12-01',
                'Goal_Actual_completion_Date' => null,
                'Goal_Target_Value' => '100%',
                'Goal_Achieved' => '70%',
                'Self_Progress_Percentage' => '70%',
                'Mentor_Progress_Percentage' => '65%'
            ],
            [
                'Goal_Type' => 'Improve English Speaking',
                'Goal_Start_On' => '2024-03-10',
                'Goal_Expected_completion_Date' => '2024-09-30',
                'Goal_Actual_completion_Date' => '2024-09-28',
                'Goal_Target_Value' => '90%',
                'Goal_Achieved' => '90%',
                'Self_Progress_Percentage' => '90%',
                'Mentor_Progress_Percentage' => '92%'
            ]
        ];
        return view('ManageStudents/vijetaas/list', $data);
    }

    public function add()
    {
        return view('ManageStudents/vijetaas/add');
    }

    public function store()
    {
        $studentModel = new StudentModel();
        $programModel = new StudentProgramModel();
        $mentorModel  = new StudentMentorModel();

        $studentId = uniqid('STU'); // Generate custom PK

        // Save STUDENT table
        $studentModel->insert([
            'Student_Id' => $studentId,
            'First_Name' => $this->request->getPost('first_name'),
            'Last_Name'  => $this->request->getPost('last_name'),
            'Gender'     => $this->request->getPost('gender'),
            'DOB'        => $this->request->getPost('dob'),
            'Aadhar_No'  => $this->request->getPost('aadhar_no'),
            'Phone_No'   => $this->request->getPost('phone'),
            'Email_Id'   => $this->request->getPost('email'),
            'Village_City' => $this->request->getPost('city'),
            'District'   => $this->request->getPost('district'),
            'State'      => $this->request->getPost('state'),
            'Pincode'    => $this->request->getPost('pincode'),
            'Nationality'=> $this->request->getPost('nationality'),
            'Address'    => $this->request->getPost('address'),
            'Photo_URL'  => '', // TODO: handle upload
            'Aadhar_Photo_URL' => '',
            'Enrollment_Date' => date('Y-m-d'),
            'Current_Education_level' => $this->request->getPost('current_edu'),
            'Highest_Education_Completed' => $this->request->getPost('highest_edu'),
            'Student_Caste' => $this->request->getPost('caste'),
            'Student_Status' => $this->request->getPost('status'),
            'Remarks' => $this->request->getPost('remarks'),
            'Fathers_Name' => $this->request->getPost('father_name'),
            'Father_Contact_Number' => $this->request->getPost('father_contact'),
            'Father_Email_ID' => $this->request->getPost('father_email'),
            'Father_Occupation' => $this->request->getPost('father_occupation'),
            'Mothers_Name' => $this->request->getPost('mother_name'),
            'Mother_Contact_Number' => $this->request->getPost('mother_contact'),
            'Mother_Email_ID' => $this->request->getPost('mother_email'),
            'Mother_Occupation' => $this->request->getPost('mother_occupation'),
            'Family_Monthly_Income' => $this->request->getPost('income'),
            'Sibling_Number' => $this->request->getPost('siblings'),
            'Rec_Added_By' => 'admin',
            'Rec_Added_On' => date('Y-m-d')
        ]);

        // Save STUDENT_PROGRAM table
        $programModel->insert([
            'Stu_Prog_Id' => uniqid('SP'),
            'Student_Id'  => $studentId,
            'Program_Id'  => 'VIJ001', // Vijetaas Program_Id
            'Batch_Id'    => $this->request->getPost('batch'),
            'Program_level' => $this->request->getPost('program_level'),
            'Program_Status' => $this->request->getPost('program_status'),
            'Prog_enrolled_on' => $this->request->getPost('enroll_date'),
            'Prog_enrolled_till' => $this->request->getPost('prog_till'),
            'Rec_Added_By' => 'admin',
            'Rec_Added_On' => date('Y-m-d')
        ]);

        // Save STUDENT_MENTOR table
        $mentorModel->insert([
            'Stu_Mentor_Id' => uniqid('SM'),
            'Student_Id'    => $studentId,
            'Program_Id'    => 'VIJ001',
            'Mentor_Name'   => $this->request->getPost('mentor_id'), // change if ID->Name mapping
            'Mentor_Category' => '',
            'Mentor_Status' => $this->request->getPost('mentor_status'),
            'Mentor_From_Date' => $this->request->getPost('mentor_from'),
            'Mentor_To_Date' => $this->request->getPost('mentor_to'),
            'Mentor_For' => $this->request->getPost('mentor_for'),
            'Remarks' => '',
            'Rec_Added_By' => 'admin',
            'Rec_Added_On' => date('Y-m-d')
        ]);

        return redirect()->to('students/vijetaas')->with('success', 'Student added successfully');
    }

    public function view($id)
{
    $studentModel = new StudentModel();
    $programModel = new \App\Models\StudentProgramModel();
    $mentorModel  = new \App\Models\StudentMentorModel();

    // 1. Student Details
    $student = $studentModel->getStudentById($id);

    if (!$student) {
        throw PageNotFoundException::forPageNotFound("Student not found");
    }

    // 2. Program Details
    $program = $programModel
        ->select('student_program.*, programs.Program_Name, batches.Batch_Name')
        ->join('programs', 'programs.Program_Id = student_program.Program_Id', 'left')
        ->join('batches', 'batches.Batch_Id = student_program.Batch_Id', 'left')
        ->where('student_program.Student_Id', $id)
        ->first();

    // 3. Mentor Details
    $mentors = $mentorModel
        ->where('Student_Id', $id)
        ->findAll();

    // Pass to view
    return view('ManageStudents/vijetaas/view', [
        'student' => $student,
        'program' => $program,
        'mentors' => $mentors
    ]);
}


    public function edit($id)
    {
        $studentModel = new StudentModel();
        $data['student'] = $studentModel->find($id);

        return view('ManageStudents/vijetaas/edit', $data);
    }

    public function update($id)
    {
        $studentModel = new StudentModel();
        $studentModel->update($id, [
            'First_Name' => $this->request->getPost('first_name'),
            'Last_Name'  => $this->request->getPost('last_name'),
            'Email_Id'   => $this->request->getPost('email'),
            'Phone_No'   => $this->request->getPost('phone'),
            'State'      => $this->request->getPost('state'),
            'Student_Status' => $this->request->getPost('status')
        ]);

        return redirect()->to('students/vijetaas')->with('success', 'Student updated successfully');
    }

    public function delete($id)
    {
        $studentModel = new StudentModel();
        $studentModel->delete($id);

        return redirect()->to('students/vijetaas')->with('success', 'Student deleted successfully');
    }
}
