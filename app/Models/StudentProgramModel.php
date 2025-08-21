<?php
namespace App\Models;

use CodeIgniter\Model;

class StudentProgramModel extends Model
{
    protected $table            = 'STUDENT_PROGRAM';
    protected $primaryKey       = 'Stu_Prog_Id';
    public    $incrementing     = false;

    protected $allowedFields    = [
        'Stu_Prog_Id',
        'Student_Id',
        'Program_Id',
        'Batch_Id',
        'Program_level',
        'Program_Status',
        'Prog_enrolled_on',
        'Prog_enrolled_till',
        'Rec_Added_By',
        'Rec_Added_On',
        'Rec_Updated_By',
        'Rec_Last_Updated_On'
    ];
}
