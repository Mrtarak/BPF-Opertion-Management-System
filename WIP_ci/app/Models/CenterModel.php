<?php
namespace App\Models;
use CodeIgniter\Model;

class CenterModel extends Model
{
    protected $table = 'center_m';
    protected $primaryKey = 'Center_Id';
    protected $allowedFields = ['Center_Id', 'Center_Name', 'Center_Head_Id','Center_Coordinator',
    'Center_Status', 'Center_Description', 'Center_Inaugurated_By', 'Center_Head_Contact', 'Center_Opening_Date',
    'Center_Address', 'Center_City', 'Center_State', 'Center_Capacity', 'Rec_Added_By',
    'Rec_Added_On', 'Rec_Updated_By', 'Rec_Last_Updated_On'];
    public $useAutoIncrement = false;
}
