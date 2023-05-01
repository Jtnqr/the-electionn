<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AkunModel;

class AuthController extends BaseController
{

    protected $AkunModel;

    public function __construct()
    {
        $this->AkunModel = new AkunModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Login to The Electionn',
        ];

        return view('auth/login', $data);
    }

    public function postlogin()
    {
        $nis = $this->request->getVar('nis');
        $password = $this->request->getVar('password');

        $log = $this->AkunModel->getData($nis);
        if ($log == null) {
            return redirect()->to('/login');
        }

        // if (password_verify($password, $log->password)) {
        if ($password == $log->password) {
            $data = [
                'login' => true,
                'nis' => $log->nis,
                'level' => $log->level,
                'token' => $log->token,
            ];

            session()->set($data);

            return redirect()->to('/');
        } else {
            session()->setFlashdata('alert', 'Username atau Password Salah');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
}
