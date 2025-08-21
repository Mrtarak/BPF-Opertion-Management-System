<?php

namespace App\Models;
use CodeIgniter\Model;

class GoalTypeModel extends Model
{
    protected $table = 'goaltype_m';
    protected $primaryKey = 'Goal_Type_Id';
    protected $allowedFields = [
        'Goal_Type_Id', 'Goal_Type_Name', 'Goal_Type_Description',
        'Rec_Added_By', 'Rec_Added_On', 'Rec_Updated_By', 'Rec_Last_Updated_On'
    ];
}
