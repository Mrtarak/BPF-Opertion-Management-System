<?php

namespace Config\Validation;
use CodeIgniter\Config\BaseConfig;

class ProgramValidation extends BaseConfig{
    public static $programRules = [
        'Program_Name' => 'required|max_length[200]',
        'Program_About' => 'required|max_length[500]',
        'Program_Start_Date'   => 'required|valid_date',
        'Program_Theme_Id' => 'required',
        'Applicable_For' => 'required|max_length[20]',
        'Program-Status' => 'required|in_list[Active,InActive,Completed]',
        'Rec_Added_By' => 'required',
    ];

    public array $programErrors = [
        'Program_Name' => [
            'required' => 'Program Name is required',
            'max_length' => 'Program Name must be at most 200 characters',
        ],
        'Program_About' => [
            'required' => 'About field is required',
            'max_length' => 'About must be at most 500 characters',
        ],
        'Program_Start_Date' => [
            'required' => 'Start Date is required',
            'valid_date' => 'Please enter a valid date',
        ],
        'Program_Theme_Id' => [
            'required' => 'Program Theme is required',
        ],
        'Applicable_For' => [
            'required' => 'Applicable For is required',
            'max_length' => 'Applicable For must be at most 20 characters'
        ],
        'Program_Status' => [
            'required' => 'Status is required',
        ],
        'Rec_Added_By' => [
            'required' => 'Recorded By is required',
        ],
    ];
}