<?php

namespace App\Models;
use CodeIgniter\Model;

class GoalModel extends Model
{
    protected $table = 'goals';
    protected $primaryKey = 'Goal_Id';
    protected $allowedFields = [
        'Goal_Id', 'Goal_Type_Id', 'Rec_Added_By', 'Rec_Added_On',
        'Rec_Updated_By', 'Rec_Last_Updated_On'
    ];
}
