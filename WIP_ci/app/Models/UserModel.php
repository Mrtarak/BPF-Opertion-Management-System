<?php 
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'user_m';
    protected $primaryKey = 'User_Id';
    public $useAutoIncrement = false;

    protected $allowedFields = [
    'User_Id', 'User_FirstName', 'User_LastName', 'User_Gender', 'User_DOB',
    'User_FatherName', 'User_MotherName', 'User_Aadhar_No', 'User_Phone_No',
    'User_Village_City', 'User_District', 'User_State', 'User_Nationality',
    'User_Joining_Date', 'User_Photo', 'User_Aadhar_Photo', 'User_Address',
    'User_Status', 'Role_Id', 'Program_Id', 'Record_Added_By', 'Rec_Added_On',
    'Rec_Updated_By', 'Rec_Last_Updated_On'
];

    protected $useTimestamps = false;

}
