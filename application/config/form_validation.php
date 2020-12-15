<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$config = [
    	
    //Admin panel Rules
    'site_login' => [
        ['field' => 'email_id', 'label' => 'Email ID', 'rules' => 'required|valid_email|trim'],
        ['field' => 'password', 'label' => 'Password', 'rules' => 'required']
    ],
    'request'=>[
    	['field' => 'name', 'label' => 'Request', 'rules' => 'trim|required|min_length[2]|max_length[15]|is_unique[tbl_request.r_name]']

    ],
    'edit_request'=>[
    	['field' => 'name', 'label' => 'Request', 'rules' => 'trim|required|min_length[2]|max_length[15]']

    ],
    'project'=>[
    	['field' => 'name', 'label' => 'Project', 'rules' => 'trim|required|min_length[2]|max_length[15]|is_unique[tbl_project.project_name]'],
        ['field' => 'member', 'label' => 'Team Size Member', 'rules' => 'trim|required'],
        ['field' => 'created_by', 'label' => 'Created By', 'rules' => 'trim|required'],
        ['field' => 'duration', 'label' => 'Duration', 'rules' => 'trim|required'],
        ['field' => 'category', 'label' => 'Category', 'rules' => 'trim|required'],
        ['field' => 'leader', 'label' => 'Leader', 'rules' => 'trim|required'],
         ['field' => 'project_coordinator', 'label' => 'Project Coordinator', 'rules' => 'trim|required'],
         ['field' => 'project_status', 'label' => 'Project Status', 'rules' => 'trim|required'],

    	['field' => 'start_date', 'label' => 'Expected End Date', 'rules' => 'trim|required']
    	,
    	['field' => 'end_date', 'label' => 'Start Date', 'rules' => 'trim|required']

    ],
    'edit_project'=>[
       ['field' => 'name', 'label' => 'Project', 'rules' => 'trim|required|min_length[2]|max_length[15]|is_unique[tbl_project.project_name]'],
        ['field' => 'member', 'label' => 'Team Size Member', 'rules' => 'trim|required'],
        ['field' => 'created_by', 'label' => 'Created By', 'rules' => 'trim|required'],
        ['field' => 'duration', 'label' => 'Duration', 'rules' => 'trim|required'],
        ['field' => 'category', 'label' => 'Category', 'rules' => 'trim|required'],
        ['field' => 'leader', 'label' => 'Leader', 'rules' => 'trim|required'],
         ['field' => 'project_coordinator', 'label' => 'Project Coordinator', 'rules' => 'trim|required'],
         ['field' => 'project_status', 'label' => 'Project Status', 'rules' => 'trim|required'],

        ['field' => 'start_date', 'label' => 'Expected End Date', 'rules' => 'trim|required']
        ,
        ['field' => 'end_date', 'label' => 'Start Date', 'rules' => 'trim|required']

    ],
    'module'=>[
        ['field' => 'name', 'label' => 'Module', 'rules' => 'trim|required|min_length[2]|max_length[15]|is_unique[module.name]']

    ],
    
    'edit_module'=>[
        ['field' => 'name', 'label' => 'Module', 'rules' => 'trim|required|min_length[2]|max_length[15]']

    ],
    'role'=>[
        ['field' => 'name', 'label' => 'Role', 'rules' => 'trim|required|min_length[2]|max_length[15]|is_unique[user_role.role]']
    ],
    'edit_role'=>[
        ['field' => 'name', 'label' => 'Role', 'rules' => 'trim|required|min_length[2]|max_length[15]']
    ],
    'user'=>[
         ['field' => 'name', 'label' => 'User Name', 'rules' => 'trim|required|min_length[2]|max_length[15]'],
         ['field' => 'mobile', 'label' => 'Mobile Number', 'rules' => 'trim|required|min_length[10]'],
         ['field' => 'email', 'label' => 'Email', 'rules' => 'valid_email'],
         ['field' => 'password', 'label' => 'Password', 'rules' => 'required|min_length[8]']
    ],
    'edit_user'=>[
         ['field' => 'name', 'label' => 'User Name', 'rules' => 'trim|required|min_length[2]|max_length[15]'],
         ['field' => 'mobile', 'label' => 'Mobile Number', 'rules' => 'trim|required|min_length[10]'],
         ['field' => 'email', 'label' => 'Email', 'rules' => 'valid_email']
    ],
    'api'=>[
         ['field' => 'name', 'label' => 'Api Name', 'rules' => 'trim|required|min_length[2]|max_length[15]'],
         ['field' => 'description', 'label' => 'Description', 'rules' => 'trim|required'],
         ['field' => 'base_url', 'label' => 'base url', 'rules' => 'required']
         ,
         ['field' => 'request_method', 'label' => 'Request Method', 'rules' => 'required']
         ,
         ['field' => 'project', 'label' => 'Project', 'rules' => 'required']
         ,
         ['field' => 'module', 'label' => 'Module', 'rules' => 'required']
    ]
    ,
    'edit_api'=>[
         ['field' => 'name', 'label' => 'Api Name', 'rules' => 'trim|required|min_length[2]|max_length[15]'],
         ['field' => 'description', 'label' => 'Description', 'rules' => 'trim|required'],
         ['field' => 'base_url', 'label' => 'base url', 'rules' => 'required']
         ,
         ['field' => 'request_method', 'label' => 'Request Method', 'rules' => 'required']
         ,
         ['field' => 'project', 'label' => 'Project', 'rules' => 'required']
         ,
         ['field' => 'module', 'label' => 'Module', 'rules' => 'required']
    ]


];

