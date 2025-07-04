<?php

namespace App\Models;
use CodeIgniter\Model;

class GoalTypeModel extends Model
{
    protected $table = 'goaltype_m';
    protected $primaryKey = 'Goal_Type_Id';
    protected $allowedFields = [
        'Goal_Type_Id', 'Goal_Name', 'Goal_Description', 'Goal_Start_On', 'Goal_Upto',
        'Progress_Percentage', 'Progress_Status', 'Goal_Target_Value', 'Goal_Achieved_Value',
        'Record_Added_By', 'Rec_Added_On', 'Rec_Updated_By', 'Rec_Last_Updated_On'
    ];
}
