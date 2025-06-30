<?php

namespace App\Models;

use CodeIgniter\Model;

class VijetaasModel extends Model
{
    protected $table = 'Vijetaas_Stu'; 
    protected $primaryKey = 'Vijetaas_Stu_Id'; 
    protected $allowedFields = [
        'User_Id','Role_Id', 'Program_Id', 'Goal_Id', 'Attendance_Id',
        'Mentor_Id', 'Vijetaas_Mail_Id', 'Education', 'Enrollment_Date',
        'Completion_Date', 'Vijetaas_Status', 'Remarks',
        'Rec_Added_By', 'Rec_Added_On', 'Rec_Updated_By', 'Rec_Last_Updated_On'
    ];
}
