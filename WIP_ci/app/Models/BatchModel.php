<?php
namespace App\Models;
use CodeIgniter\Model;

class BatchModel extends Model
{
    protected $table = 'batch_m';
    protected $primaryKey = 'Batch_Id';
    protected $allowedFields = ['Batch_Id', 'Batch_Name', 'Start_Time',
    'End_Time', 'Batch_Start_Date', 'Batch_Last_Date', 'Center_Id', 
    'Program_Id', 'Description', 'Batch_Mode', 'Batch_Status', 
    'Rec_Added_By', 'Rec_Added_On', 'Rec_Updated_By', 'Rec_Last_Updated_On'];
    public $useAutoIncrement = false;
}
