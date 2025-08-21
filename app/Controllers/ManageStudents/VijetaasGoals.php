<?php
namespace App\Controllers\ManageStudents;

use App\Controllers\BaseController;
use App\Models\StudentGoalsModel;

class VijetaasGoals extends BaseController
{
    public function index()
    {
        $model = new StudentGoalsModel();
        $programId = 'PROG_685153f441971';
        $data['goals'] = $model->getGoalsByProgram($programId);

        return view('ManageStudents/vijetaas/goals_list', $data);
    }

     public function addGoal()
    {
        // Dummy goal types for testing
    $data['types'] = [
        ['Goal_Type_Id' => 'GT001', 'Goal_Type_Name' => 'Job Placement'],
        ['Goal_Type_Id' => 'GT002', 'Goal_Type_Name' => 'Skill Improvement'],
        ['Goal_Type_Id' => 'GT003', 'Goal_Type_Name' => 'Communication'],
    ];
        return view('ManageStudents/vijetaas/add_goal', $data);
    }

    public function storeGoal()
    {
        $goalModel = new StudentGoalsModel();

        $goalModel->insert([
            'Goal_Id' => uniqid('GOAL'),
            'Student_Id' => $this->request->getPost('student_id'),
            'Goal_Type_Id' => $this->request->getPost('goal_type'),
            'Mentor_Id' => $this->request->getPost('mentor_id'),
            'Goal_Start_On' => $this->request->getPost('goal_start_on'),
            'Goal_Expected_completion_Date' => $this->request->getPost('goal_expected'),
            'Goal_Actual_completion_Date' => $this->request->getPost('goal_actual'),
            'Goal_Target_Value' => $this->request->getPost('goal_target'),
            'Goal_Achieved' => $this->request->getPost('goal_achieved'),
            'Student_Remark' => $this->request->getPost('student_remark'),
            'Mentor_Remark' => $this->request->getPost('mentor_remark'),
            'Self_Progress_Percentage' => $this->request->getPost('self_progress'),
            'Mentor_Progress_Percentage' => $this->request->getPost('mentor_progress'),
        ]);

        return redirect()->to('students/vijetaas/goals')->with('success', 'Goal added successfully');
    }

    public function viewGoal($id)
    {
        $goalModel = new StudentGoalsModel();
        $data['goal'] = $goalModel->find($id);
        return view('ManageStudents/vijetaas/view_goal', $data);
    }

    public function editGoal($id)
    {
        $goalModel = new StudentGoalsModel();
        $data['goal'] = $goalModel->find($id);
        return view('ManageStudents/vijetaas/edit_goal', $data);
    }

    public function updateGoal($id)
    {
        $goalModel = new StudentGoalsModel();
        $goalModel->update($id, $this->request->getPost());
        return redirect()->to('students/vijetaas/goals')->with('success', 'Goal updated successfully');
    }

    public function deleteGoal($id)
    {
        $goalModel = new StudentGoalsModel();
        $goalModel->delete($id);
        return redirect()->to('students/vijetaas/goals')->with('success', 'Goal deleted successfully');
    }
    
}