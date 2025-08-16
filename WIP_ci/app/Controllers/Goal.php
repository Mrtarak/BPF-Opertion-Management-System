<?php

namespace App\Controllers;
use App\Models\GoalTypeModel;
use App\Models\GoalModel;
use CodeIgniter\Controller;

class Goal extends Controller
{
    public function GoalTypes()
    {
        $model = new GoalTypeModel();
        $data['types'] = $model->findAll();
        return view('ManageGoalType/goal_types', $data);
    }

    public function addGoalType()
    {
        return view('ManageGoalType/add_goal_type');
    }

    public function saveGoalType()
    {
        $model = new GoalTypeModel();
        $data = [
        'Goal_Type_Id' => $this->request->getPost('Goal_Type_Id'),
        'Goal_Type_Name' => $this->request->getPost('Goal_Type_Name'),
        'Goal_Type_Description' => $this->request->getPost('Goal_Type_Description'),
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
        return view('ManageGoalType/edit_goal_type', $data);
    }

    public function updateGoalType($id)
    {
        $model = new GoalTypeModel();
        $model->update($id, $this->request->getPost());
        return redirect()->to('goals/types')->with('success', 'Goal Type updated');
    }

    public function view($id)
{
    $model = new \App\Models\GoalTypeModel();
    $data['goalType'] = $model->find($id);

    if (!$data['goalType']) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Goal Type not found.");
    }

    return view('ManageGoalType/view_goal_type', $data);
}


    public function deleteGoalType($id)
    {
        $model = new GoalTypeModel();
        $model->delete($id);
        return redirect()->to('goals/types')->with('success', 'Goal Type deleted');
    }
}