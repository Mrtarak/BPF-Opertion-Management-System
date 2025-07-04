<?php

namespace App\Controllers;
use App\Models\GoalTypeModel;
use App\Models\GoalModel;
use CodeIgniter\Controller;

class Goal extends Controller
{
    // ---------- GOAL TYPES PART----------

    public function GoalTypes()
    {
        $model = new GoalTypeModel();
        $data['types'] = $model->findAll();
        return view('ManageGoals/goal_types', $data);
    }

    public function addGoalType()
    {
        return view('ManageGoals/add_goal_type');
    }

    public function saveGoalType()
    {
        $model = new GoalTypeModel();
        $data = [
        'Goal_Type_Id' => $this->request->getPost('Goal_Type_Id'),
        'Goal_Name' => $this->request->getPost('Goal_Name'),
        'Goal_Description' => $this->request->getPost('Goal_Description'),
        'Goal_Start_On' => $this->request->getPost('Goal_Start_On'),
        'Goal_Upto' => $this->request->getPost('Goal_Upto'),
        'Progress_Percentage' => $this->request->getPost('Progress_Percentage'),
        'Progress_Status' => $this->request->getPost('Progress_Status'),
        'Goal_Target_Value' => $this->request->getPost('Goal_Target_Value'),
        'Goal_Achieved_Value' => $this->request->getPost('Goal_Achieved_Value'),
        'Rec_Added_By' => $this->request->getPost('Rec_Added_By'),
        'Rec_Added_On' => $this->request->getPost('Rec_Added_On'),
        'Rec_Updated_By' => $this->request->getPost('Rec_Updated_By'),
        'Rec_Last_Updated_On' => $this->request->getPost('Rec_Last_Updated_On')
    ];      
    $model->insert($data);
    return redirect()->to('goals/types')->with('success', 'Goal Type added');
    }

    public function editGoalType($id)
    {
        $model = new GoalTypeModel();
        $data['type'] = $model->find($id);
        return view('ManageGoals/edit_goal_type', $data);
    }

    public function updateGoalType($id)
    {
        $model = new GoalTypeModel();
        $model->update($id, $this->request->getPost());
        return redirect()->to('goals/types')->with('success', 'Goal Type updated');
    }

    public function deleteGoalType($id)
    {
        $model = new GoalTypeModel();
        $model->delete($id);
        return redirect()->to('goals/types')->with('success', 'Goal Type deleted');
    }

    // ---------- GOALS PART----------

    public function Goals()
    {
        $model = new GoalModel();
        $data['goals'] = $model->select('goals.*, goaltype_m.Goal_Name')
                                ->join('goaltype_m', 'goaltype_m.Goal_Type_Id = goals.Goal_Type_Id')
                                ->findAll();
        return view('ManageGoals/goals', $data);
    }

    public function addGoal()
    {
        $typeModel = new GoalTypeModel();
        $data['types'] = $typeModel->findAll();
        return view('ManageGoals/add_goal', $data);
    }

    public function saveGoal()
{
    $model = new GoalModel();
    $data = [
        'Goal_Id' => $this->request->getPost('Goal_Id'),
        'Goal_Type_Id' => $this->request->getPost('Goal_Type_Id'),
        'Rec_Added_By' => $this->request->getPost('Rec_Added_By'),
        'Rec_Added_On' => $this->request->getPost('Rec_Added_On'),
        'Rec_Updated_By' => $this->request->getPost('Rec_Updated_By'),
        'Rec_Last_Updated_On' => $this->request->getPost('Rec_Last_Updated_On')
    ];
    $model->insert($data);
    return redirect()->to(site_url('goals'))->with('success', 'Goal added successfully!');
}


    public function editGoal($id)
    {
        $model = new GoalModel();
        $typeModel = new GoalTypeModel();
        $data['goal'] = $model->find($id);
        $data['types'] = $typeModel->findAll();
        return view('ManageGoals/edit_goal', $data);
    }

    public function updateGoal($id)
    {
        $model = new GoalModel();
        $model->update($id, $this->request->getPost());
        return redirect()->to('goals')->with('success', 'Goal updated');
    }

    public function deleteGoal($id)
    {
        $model = new GoalModel();
        $model->delete($id);
        return redirect()->to('goals')->with('success', 'Goal deleted');
    }
}
