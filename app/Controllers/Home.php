<?php

namespace App\Controllers;



use App\Models\CommonModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new CommonModel();

        // echo password_hash("admin",PASSWORD_DEFAULT);
        // die();
        // $_POST['username'];
       
        if ($this->request->getMethod() == "post"){

            $rules = $this->validate([
               'username' => ['label' => 'username', 'rules' => 'required'],
               'password' => ['label' => 'password', 'rules' => 'required'],
            ]);

            if ($rules == TRUE){

                $username = $this->request->getPost('username');
                $password = $this->request->getPost('password');
                $fecthUsenameData = $model->selectRow("admin_login",['username'=>$username]);
                
                if (!empty($fecthUsenameData)){
                    if(password_verify($password,$fecthUsenameData->password)){

                        session()->setFlashdata("succes","Login successfylly");

                        $data = array(
                            'username' => $fecthUsenameData->username,
                            'admin_login' => TRUE
                        );

                        session()->set($data);
                        
                        return redirect()->to(site_url('dashboard'));
                    
                    }else{
                        session()->setFlashdata("error","Username is not valid");
                        return view('welcome_message');
                    }
                } else{
                    session()->setFlashdata("error","Username is not valid");
                    return view('welcome_message');
                }
            }else{
                return view('welcome_message');
            }

        } else{
            return view('welcome_message');
        }
    }

    public function logout()
    {
        session()->destroy();
        session()->setFlashdata('success','Logout Successfylly');
        return redirect()->to(site_url('/'));
    }
}
