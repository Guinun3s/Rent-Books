<?php

namespace Rentbooks\Controller;

use Rentbooks\Core\Controller;

class LoginController extends Controller{

    public function login(){
        $this->view('login');
    }

    public function criarconta(){
        $this->view('criarconta');
    }
}