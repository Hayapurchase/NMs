<?php

namespace App\Controllers;
use App\Models\UserModel;

class Register extends BaseController
{
    public function index()
    {
        return view('register');
    } 
    public function register()
    {
        helper(['form']);

        $usermodel=new UserModel();

        $rules=[
            'Username'=>'required|min_length[2]|max_length[50]',
            'Email'=>'required|min_length[4]|max_length[100]|valid_Email',
            'Password'=>'required|min_length[4]|max_length[50]',
            'Confirmpassword'=>'matches[Password]'
        ];

        if ($this->validate($rules)) {
        
        

        $data=[
            'Email'=> $this->request->getVar('Email'),
            'Username'=> $this->request->getVar('Username'),
            'Password'=> password_hash($this->request->getVar('Password'),PASSWORD_DEFAULT),
            'Position'=> 'Customer',
            'is_deleted'=>'0'
        ];

        $usermodel->save($data);

    }else
    {
        $data=['validation Problem'];
        echo view('register',$data);
        
    }
    }
}