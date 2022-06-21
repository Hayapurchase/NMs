<?php

namespace App\Controllers;
use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function Login()
    {
        $session=session();
        $usermodel=new UserModel();

        $email=$this->request->getVar('Email');
        $password=$this->request->getVar('Password');

        $data=$usermodel->where('Email',$email)->first();

        $pass=$data['Password'];
        $verify=password_verify($password, $pass);

        if ($verify) {
                    if ($data['Position']==='Customer') {
            $sessiondata=[
                    'id'=>$data['user_id'],
                    'Username'=>$data['Username'],
                    'Email'=>$data['Email'],
                    'Position'=>$data['Position'],
                    'isLoggedIn'=>TRUE
                ];
                $session->set($sessiondata);
            return view('home',$data);
        }elseif ($data['Position']==='Driver') {
            $sessiondata=[
                    'id'=>$data['user_id'],
                    'Username'=>$data['Username'],
                    'Email'=>$data['Email'],
                    'Position'=>$data['Position'],
                    'isLoggedIn'=>TRUE
                ];
                $session->set($sessiondata);
            return view('home',$data);
        }elseif ($data['Position']==='Admin') {
            $sessiondata=[
                    'id'=>$data['user_id'],
                    'Username'=>$data['Username'],
                    'Email'=>$data['Email'],
                    'Position'=>$data['Position'],
                    'isLoggedIn'=>TRUE
                ];
                $session->set($sessiondata);
            return view('home',$data);
        }else{
            $sessiondata=[NULL];
            echo "not found";
        }
        }
        else
        {
            echo "failed";
        }

    }
    public function logout(){
            $session = \Config\Services::session($config);
            session_destroy();
            return redirect('login');
    }

}
