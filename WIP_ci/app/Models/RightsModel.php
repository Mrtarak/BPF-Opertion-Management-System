<?php

namespace App\Models;
use CodeIgniter\Model;

class RightsModel extends Model {
    protected $table = 'rights_m';
    protected $primaryKey = 'Right_Id';
    protected $allowedFields = ['Right_Id', 'Program_Info', 'Event_Info',
     'Center_Info', 'Asset_Info', 'User_Info', 'Fees_Info', 'Salary_Info', 
     'Expenses_Info', 'Can_Edit', 'Can_Delete', 'Record_Added_By', 'Rec_Added_On',
      'Rec_Updated_By', 'Rec_Last_Updated_On', 'Rights_Title', 'Rights_Summary'];
}
