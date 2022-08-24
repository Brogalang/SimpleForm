<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Register extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('/pages/register', $data);
    }
    public function save()
    {
        helper(['form']);
        $rules = [
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[user.email]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];
        // echo"<pre>";
        // print_r($data);
        // exit("Warning");
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'email'         => $this->request->getVar('email'),
                'password'      => password_hash($this->request->getVar('password'),PASSWORD_DEFAULT),
                'createdtime'   => date('Y-m-d H:i:s')
            ];
          
            $model->save($data);
            return redirect()->to('/pages/login');
        }else{
            $data['validation'] = $this->validator;
            echo view('/pages/register', $data);
        }
         
    }
}
